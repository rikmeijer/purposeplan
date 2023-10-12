<?php

declare(strict_types=1);

namespace rikmeijer\purposeplan\tests\Feature;

class IndexTest extends \rikmeijer\purposeplan\Tests\Feature\TestCase {
    
    public function testIndexPageShowsHelloWorld() {
        $this->open('/');
        
        $this->assertResponseCode('200');
        $this->assertBodyEquals(file_get_contents(dirname(dirname(__DIR__)) . '/resources/view/index.html'));
    }
    
}
