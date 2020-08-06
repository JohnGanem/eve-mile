<?php

namespace Mile\Universe\System;

use Assert\Assert;
use Mile\Common\ValueObject\FloatValue;

final class SystemSecurityStatus extends FloatValue
{

    protected function validate(float $value): void
    {
        Assert::that($value)->between(-1, 1);
    }
}
