<?php

declare(strict_types=1);

namespace Tests\Unit\Common;

use Mile\Common\ValueObject\IntValue;
use Tests\TestCase;
use TypeError;

class IntValueTest extends TestCase
{

    public function test_it_accept_int()
    {
        $intValue = $this->getMockForAbstractClass(IntValue::class, [1]);
        $this->assertInstanceOf(IntValue::class, $intValue);
        $this->assertIsInt($intValue->value());
        $this->assertEquals(1, $intValue->value());
    }

    // Originally it was expected to don't accept float at all but php truncate float to int when typehinted even with strict_types
    public function test_it_truncate_float()
    {
        $intValue = $this->getMockForAbstractClass(IntValue::class, [1.9]);
        $this->assertInstanceOf(IntValue::class, $intValue);
        $this->assertIsInt($intValue->value());
        $this->assertEquals(1, $intValue->value());
    }

    public function test_it_doesnt_accept_string()
    {
        $this->expectException(TypeError::class);
        $this->getMockForAbstractClass(IntValue::class, ['test']);
    }

    public function test_it_doesnt_accept_null()
    {
        $this->expectException(TypeError::class);
        $this->getMockForAbstractClass(IntValue::class, [null]);
    }

    public function test_it_doesnt_accept_empty()
    {
        $this->expectException(TypeError::class);
        $this->getMockForAbstractClass(IntValue::class, ['']);
    }
}
