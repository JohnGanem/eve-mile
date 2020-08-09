<?php

declare(strict_types=1);

namespace Tests\Unit\Common;

use Mile\Common\ValueObject\CommonValueObject;
use Tests\TestCase;

class CommonValueObjectTest extends TestCase
{

    public function test_it_detects_equals_values()
    {
        $intValue = $this->getMockForAbstractClass(CommonValueObject::class);
        $intValue->method('value')->willReturn(1);
        $intValueBis = $this->getMockForAbstractClass(CommonValueObject::class);
        $intValueBis->method('value')->willReturn(1);

        $this->assertTrue($intValue->equalsTo($intValueBis));

        $anotherIntValue = $this->getMockForAbstractClass(CommonValueObject::class);
        $anotherIntValue->method('value')->willReturn(2);

        $this->assertFalse($intValue->equalsTo($anotherIntValue));
    }

    public function test_it_does_strict_comparison_for_equals_method()
    {
        $intValue = $this->getMockForAbstractClass(CommonValueObject::class);
        $intValue->method('value')->willReturn(1);
        $stringValue = $this->getMockForAbstractClass(CommonValueObject::class);
        $stringValue->method('value')->willReturn('1');

        $this->assertFalse($intValue->equalsTo($stringValue));
    }
}
