<?php

declare(strict_types=1);

namespace rikmeijer\purposeplan\lib\UI;

use \rikmeijer\purposeplan\lib\Functional\Functional;

class Template {
    
    static function render(string $html) {
        return fn(callable $blocks) => preg_replace_callback('/<block\s+name="(\w+)"\s+\/>/', fn(array $matches) => $blocks($matches[1]), $html);
    }
    
    static function path(string $path) : callable {
        chdir(dirname(dirname(__DIR__)));
        return fn(string $file) => realpath(getenv('TEMPLATE_DIR') ? getenv('TEMPLATE_DIR') : $_ENV['TEMPLATE_DIR']) . ($path === '/' ? '' : $path) . $file;
    }
    
    static function open(string $filepath) : callable {
        return file_exists($filepath) ? (require $filepath) : fn(string $identifier) => null;
    }
    
    static function negotiate(array $acceptedTypes, callable $path, string $identifier, callable $found, callable $missingFile, callable $missingIdentifier, callable $missingType) : mixed {
        return \rikmeijer\purposeplan\lib\Functional\Functional::if_else(
                fn(callable $directory) => is_dir($directory('')),
                fn(callable $directory) => \rikmeijer\purposeplan\lib\Functional\Functional::if_else(
                    fn(callable $template) => count(glob($template('*/*'))) > 0, 
                    fn(callable $template) => \rikmeijer\purposeplan\lib\Functional\Functional::find(
                        fn(string $acceptedType) => file_exists($template($acceptedType)),
                        fn(string $acceptedType) => $found(fn(callable $send) => $send($acceptedType, Template::render(file_get_contents($template($acceptedType)))(self::open($directory('.php'))))),
                        $missingType
                    )($acceptedTypes), 
                    fn(callable $template) => $missingIdentifier($template('*/*'))
                )(fn(string $type) => $directory(DIRECTORY_SEPARATOR . $identifier . '.' . self::typeToExtension($type))),
                fn(callable $directory) => $missingFile($directory(''))
        )($path);
    }
    
    static function typeToExtension(string $contentType) {
        return match ($contentType) {
            'text/html' => 'html',
            'text/plain' => 'txt',
            'application/json' => 'json.php',
            '*/*' => '*'
        };
    }
    
}
