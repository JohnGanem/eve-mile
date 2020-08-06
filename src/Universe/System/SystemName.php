<?php

namespace Mile\Universe\System;

use Assert\Assert;
use Mile\Common\ValueObject\StringValue;

final class SystemName extends StringValue
{
    protected function validate(string $value): void
    {
        Assert::that($value)
            ->alnum()
            ->maxLength(255);
    }
}
