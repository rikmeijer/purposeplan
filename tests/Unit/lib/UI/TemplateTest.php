<?php

declare(strict_types=1);

namespace rikmeijer\purposeplan\tests\Unit\lib\UI;

use rikmeijer\purposeplan\lib\UI\Template;

class TemplateTest extends \rikmeijer\purposeplan\Tests\Unit\TestCase {
    
    
    public function test_replaceTPLElements(): void
    {
        $this->assertEquals('<html>Hello World</html>', Template::render('<html><block name="world" /></html>', ...['world' => fn() => 'Hello World']));
    }
    
    public function test_replaceTPLElementsAlternative(): void
    {
        $this->assertEquals('<html>Hello Universe</html>', Template::render('<html><block name="universe" /></html>', ...['universe' => fn() => 'Hello Universe']));
    }
}