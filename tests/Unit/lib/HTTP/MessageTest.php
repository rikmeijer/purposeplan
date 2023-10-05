<?php

declare(strict_types=1);

namespace rikmeijer\purposeplan\tests\Unit\lib\HTTP;

use \rikmeijer\purposeplan\lib\HTTP\Message;

class MessageTest extends \rikmeijer\purposeplan\Tests\Unit\TestCase {


    public function test_HasHeaders(): void
    {
        $message = new \rikmeijer\purposeplan\lib\HTTP\Message(['Host: example.com']);
        $this->assertEquals('Host: example.com', $message->headers[0]);
        $this->assertPropertyIsReadOnly($message, 'headers');
    }
    public function test_HasABody(): void
    {
        $message = new \rikmeijer\purposeplan\lib\HTTP\Message([], '<html>Hello World</html>');
        $this->assertEquals('<html>Hello World</html>', $message->body);
        $this->assertPropertyIsReadOnly($message, 'body');
    }

    public function test_fromRequest(): void {
        $_SERVER['HTTP_HOST'] = 'example.com';
        $message = Message::fromRequest();
        $this->assertEquals('Host: example.com', $message->headers[0]);
    }
}
