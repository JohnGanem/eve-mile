<?php

namespace Mile\Common\ValueObject;

use Assert\Assert;

abstract class IntValue extends CommonValueObject
{
    private int $value;

    final public function __construct(int $value)
    {
        $this->baseValidation($value);

        $this->validate($value);

        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }

    final private function baseValidation(int $value): void
    {
        Assert::that($value)->integer()->scalar();
    }

    protected function validate(int $value): void
    {
        // Optional validator for children classes
    }

    public function __toString(): string
    {
        return (string) $this->value();
    }
}
