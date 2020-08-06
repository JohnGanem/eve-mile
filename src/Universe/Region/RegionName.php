<?php

namespace Mile\Universe\Region;

use Assert\Assert;
use Mile\Common\ValueObject\StringValue;

final class RegionName extends StringValue
{
    protected function validate(string $value): void
    {
        Assert::that($value)
            ->alnum()
            ->maxLength(255);
    }
}
