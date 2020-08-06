<?php

namespace Mile\Universe\Item;

use Assert\Assert;
use Mile\Common\ValueObject\StringValue;

final class ItemName extends StringValue
{

    protected function validate(string $value): void
    {
        Assert::that($value)
        ->alnum()
        ->maxLength(255);
    }
}
