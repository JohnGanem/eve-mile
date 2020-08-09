<?php

declare(strict_types=1);

namespace Tests\Unit\Common;

use DateTime;
use Exception;
use InvalidArgumentException;
use LogicException;
use Mile\Common\ValueObject\ArrayValue;
use Tests\TestCase;

class ArrayValueTest extends TestCase
{

    public function test_it_should_be_iterable()
    {
        $arrayValue = $this->getMockBuilder(ArrayValue::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();

        assert($arrayValue instanceof ArrayValue);
        $this->assertIsIterable($arrayValue);
    }

    public function test_it_should_accept_the_model_class_attribut()
    {
        $arrayValue = $this->getMockBuilder(ArrayValue::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();

        assert($arrayValue instanceof ArrayValue);
        $arrayValue->setModelClass(DateTime::class)->append(new DateTime());

        $this->assertIsIterable($arrayValue);
        $this->assertCount(1, $arrayValue);
    }

    public function test_it_rejects_other_class()
    {
        $this->expectException(InvalidArgumentException::class);

        $arrayValue = $this->getMockBuilder(ArrayValue::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();

        assert($arrayValue instanceof ArrayValue);
        $arrayValue->setModelClass(DateTime::class)->append(new Exception());
    }

    public function test_it_doesnt_work_without_the_attribut_set()
    {
        $this->expectException(LogicException::class);

        $arrayValue = $this->getMockBuilder(ArrayValue::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();

        assert($arrayValue instanceof ArrayValue);
        $arrayValue->append(new DateTime());
    }

    public function test_it_work_with_array_append()
    {
        $arrayValue = $this->getMockBuilder(ArrayValue::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();

        assert($arrayValue instanceof ArrayValue);
        $arrayValue->setModelClass(DateTime::class)->append([new DateTime(), new DateTime()]);

        $this->assertIsIterable($arrayValue);
        $this->assertCount(2, $arrayValue);
    }

    public function test_it_doesnt_work_with_array_append_if_one_is_not_the_good_class()
    {
        $this->expectException(InvalidArgumentException::class);

        $arrayValue = $this->getMockBuilder(ArrayValue::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();

        assert($arrayValue instanceof ArrayValue);
        $arrayValue->setModelClass(DateTime::class)->append([new DateTime(), new Exception()]);
    }

    public function test_it_doesnt_work_if_max_deep_is_one_and_it_append_array_of_array()
    {
        $this->expectException(InvalidArgumentException::class);

        $arrayValue = $this->getMockBuilder(ArrayValue::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();

        assert($arrayValue instanceof ArrayValue);
        $arrayValue->setModelClass(DateTime::class)->append([new DateTime(), [new DateTime(), new DateTime()]]);
    }

    public function test_it_insert_everything_if_max_deep_is_more_than_one_and_it_append_array_of_array()
    {
        $arrayValue = $this->getMockBuilder(ArrayValue::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();

        assert($arrayValue instanceof ArrayValue);
        $arrayValue->setModelClass(DateTime::class)->append([new DateTime(), [new DateTime(), new DateTime()]], 2);

        $this->assertIsIterable($arrayValue);
        $this->assertCount(3, $arrayValue);
    }
}
