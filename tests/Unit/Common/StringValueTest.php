<?php

namespace Tests\Unit\Common;

use Mile\Common\ValueObject\StringValue;
use PHPUnit\Framework\TestCase;
use TypeError;

class StringValueTest extends TestCase
{

    public function test_it_accept_string()
    {
        $stringValue = $this->getMockForAbstractClass(StringValue::class, ['test']);
        $this->assertInstanceOf(StringValue::class, $stringValue);
    }

    public function test_it_accept_float()
    {
        $stringValue = $this->getMockForAbstractClass(StringValue::class, [1.9]);
        $this->assertInstanceOf(StringValue::class, $stringValue);
        $this->assertIsString($stringValue->value());
        $this->assertEquals('1.9', $stringValue->value());
    }

    public function test_it_accept_int()
    {
        $stringValue = $this->getMockForAbstractClass(StringValue::class, [1]);
        $this->assertInstanceOf(StringValue::class, $stringValue);
        $this->assertIsString($stringValue->value());
        $this->assertEquals('1', $stringValue->value());
    }

    public function test_it_doesnt_accept_null()
    {
        $this->expectException(TypeError::class);
        $this->getMockForAbstractClass(StringValue::class, [null]);
    }

    public function test_it_accept_empty()
    {
        $stringValue = $this->getMockForAbstractClass(StringValue::class, ['']);
        $this->assertInstanceOf(StringValue::class, $stringValue);
        $this->assertIsString($stringValue->value());
        $this->assertEmpty($stringValue->value());
    }
}
