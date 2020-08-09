<?php

declare(strict_types=1);

namespace Mile\Common\ValueObject;

use Assert\Assert;

abstract class FloatValue extends CommonValueObject
{
    private float $value;

    final public function __construct(float $value)
    {
        $this->baseValidation($value);

        $this->validate($value);

        $this->value = $value;
    }

    public function value(): float
    {
        return $this->value;
    }

    final private function baseValidation(float $value): void
    {
        Assert::that($value)->float()->scalar();
    }

    protected function validate(float $value): void
    {
        // Optional validator for children classes
    }

    public function __toString(): string
    {
        return (string) $this->value();
    }
}
