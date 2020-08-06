<?php

namespace Mile\Common\ValueObject;

use Assert\Assert;

abstract class DateTimeValue extends StringValue
{

    const INPUT_FORMAT = 'Y-m-d H:i:s';
    private string $outputFormat = self::INPUT_FORMAT;

    protected function validate(string $value): void
    {
        Assert::that($value)->date(static::INPUT_FORMAT);
    }

    public function __toString(): string
    {
        return date($this->outputFormat, strtotime($this->value()));
    }

    public function getOutputFormat(): string
    {
        return $this->outputFormat;
    }

    public function setOutputFormat(string $outputFormat)
    {
        $this->outputFormat = $outputFormat;

        return $this;
    }
}
