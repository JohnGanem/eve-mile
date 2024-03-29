<?php

declare(strict_types=1);

namespace Mile\Common\ValueObject;

abstract class CommonValueObject
{
    abstract public function value();

    public function equalsTo(CommonValueObject $anotherObject)
    {
        return ($this->value() === $anotherObject->value());
    }
}
