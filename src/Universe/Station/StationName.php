<?php

namespace Mile\Universe\Station;

use Assert\Assert;
use Mile\Common\ValueObject\StringValue;

final class StationName extends StringValue
{

    protected function validate(string $value): void
    {
        Assert::that($value)
        ->alnum()
        ->maxLength(255);
    }
}
