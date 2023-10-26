<?php declare(strict_types=1);

namespace rikmeijer\purposeplan\lib\UI;

use rikmeijer\purposeplan\lib\Functional\Functional;

class Web {
    
    static function entry(array $server, callable $routings) : callable {
        $protocol = fn(string $code) => $server['SERVER_PROTOCOL'] . ' ' . $code;
        $path = $server['REQUEST_URI'];    

        
        $template = Functional::partial_left([Template::class, 'negotiate'], 
                    array_keys(Functional::arsort(array_reduce(explode(',', $server['HTTP_ACCEPT']), function ($res, $el) {
            list($l, $q) = array_merge(explode(';q=', $el), [1]); 
            $res[$l] = (float) $q; 
            return $res; 
        }, []))), 
                    strtolower($server['REQUEST_METHOD']));
        
        return function(callable $headers, callable $body) use ($protocol, $template, $path, $routings) : void  {
            $protocol = fn(string $code) => $headers($protocol($code));
            $respond = function(string $contentType, string $status, string $content) use ($protocol, $body, $headers) : void {
                static $sent = false;
                if ($sent) {
                    return;
                }
                $protocol($status);
                $headers('Content-Type: ' . $contentType);
                $body($content);
                $sent = true;
            };
            $error = fn(string $code, string $description) => $respond('text/plain', $code . ' ' . $description, $description);
            
            $routings(self::resourceMatcher(fn(callable ...$blocks) => $template(
                    fn(string $type, string $content) => $respond($type, '200 OK', Template::render($content, ...$blocks)), 
                    fn() => $error('405', 'Method Not Allowed'),
                    fn() => $error('406', 'Not Acceptable')
                    ), $path, $error));
            
            
            $error('404', 'File Not Found');
        };
    }
    
    static function template(string $identifier, string $contentType, callable $respond) {
        return fn(callable ...$blocks) => $respond($contentType, '200 OK', Template::render(file_get_contents(Template::path($identifier, $contentType)), ...$blocks));
    }
    
    static function resourceMatcher(callable $template, string $path, callable $error) {
        return fn(string $identifier, callable $resource) => Functional::if_else(
            Functional::partial_left('str_starts_with', $path), 
            Functional::tail(
               fn(string $resource_path) => $resource($template),
               fn(mixed $composed, string $resource_path) => fn(callable $router) => $router(self::resourceMatcher($template, substr($path, strlen($resource_path)), $error))
            ),
            fn() => Functional::nothing()
        )('/' . $identifier);
    }
}
