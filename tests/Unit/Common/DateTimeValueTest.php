<?php

declare(strict_types=1);

namespace Tests\Unit\Common;

use InvalidArgumentException;
use Mile\Common\ValueObject\DateTimeValue;
use Tests\TestCase;

class DateTimeValueTest extends TestCase
{

    public function test_it_accept_correct_date_format()
    {
        $dateTimeValue = $this->getMockForAbstractClass(DateTimeValue::class, ['2020-01-01 00:00:00']);
        $this->assertInstanceOf(DateTimeValue::class, $dateTimeValue);
        $this->assertEquals('2020-01-01 00:00:00', $dateTimeValue->value());
    }

    public function test_it_doesnt_accept_other_date_format()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->getMockForAbstractClass(DateTimeValue::class, ['01/01/2020 00:00:00']);
    }

    public function test_default_output_format_is_same_as_input()
    {
        $dateTimeValue = $this->getMockForAbstractClass(DateTimeValue::class, ['2020-01-01 00:00:00']);
        $this->assertInstanceOf(DateTimeValue::class, $dateTimeValue);
        $this->assertEquals('2020-01-01 00:00:00', (string) $dateTimeValue);
    }

    public function test_change_output_format()
    {
        $dateTimeValue = $this->getMockForAbstractClass(DateTimeValue::class, ['2020-01-01 00:00:00']);
        $dateTimeValue->setOutputFormat('d/m/Y H:i:s');
        $this->assertInstanceOf(DateTimeValue::class, $dateTimeValue);
        $this->assertEquals('01/01/2020 00:00:00', (string) $dateTimeValue);
    }
}
