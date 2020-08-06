<?php

namespace Mile\Common\ValueObject;

use Assert\Assert;

abstract class StringValue extends CommonValueObject
{
    private string $value;

    final public function __construct(string $value)
    {
        $this->baseValidation($value);

        $this->validate($value);

        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    final private function baseValidation(string $value): void
    {
        Assert::that($value)->string()->scalar();
    }

    protected function validate(string $value): void
    {
        // Optional validator for children classes
    }

    public function __toString(): string
    {
        return $this->value();
    }
}