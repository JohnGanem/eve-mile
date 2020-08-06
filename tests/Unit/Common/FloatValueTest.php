<?php

namespace Tests\Unit\Common;

use Mile\Common\ValueObject\FloatValue;
use PHPUnit\Framework\TestCase;
use TypeError;

class FloatValueTest extends TestCase
{

    public function test_it_accept_float()
    {
        $floatValue = $this->getMockForAbstractClass(FloatValue::class, [1.1]);
        $this->assertInstanceOf(FloatValue::class, $floatValue);
        $this->assertIsFloat($floatValue->value());
        $this->assertEquals(1.1, $floatValue->value());
    }

    public function test_it_accept_int()
    {
        $floatValue = $this->getMockForAbstractClass(FloatValue::class, [1]);
        $this->assertInstanceOf(FloatValue::class, $floatValue);
        $this->assertIsFloat($floatValue->value());
        $this->assertEquals(1.0, $floatValue->value());
    }

    public function test_it_doesnt_accept_string()
    {
        $this->expectException(TypeError::class);
        $floatValue = $this->getMockForAbstractClass(FloatValue::class, ['test']);
    }

    public function test_it_doesnt_accept_null()
    {
        $this->expectException(TypeError::class);
        $floatValue = $this->getMockForAbstractClass(FloatValue::class, [null]);
    }

    public function test_it_doesnt_accept_empty()
    {
        $this->expectException(TypeError::class);
        $floatValue = $this->getMockForAbstractClass(FloatValue::class, ['']);
    }
}
