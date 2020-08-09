<?php

namespace Mile\Common\ValueObject;

use ArrayObject;

abstract class ArrayValue extends ArrayObject
{

    protected ?string $modelClass = null;

    private function __construct(string $modelClass)
    {
        $this->modelClass = $modelClass;
    }

    // return new self(Model::class);
    abstract public function create(): self;

    final public function offsetSet($key, $val)
    {
        if (is_null($this->modelClass)) {
            throw new \LogicException("$this->modelClass must be set in the class that extend ArrayValue");
        }
        if ($val instanceof $this->modelClass) {
            return parent::offsetSet($key, $val);
        }
        throw new \InvalidArgumentException("Value must be a {$this->modelClass}");
    }

    final public function append($value, int $maxDeep = 1, int $deep = 1)
    {
        if ($deep <= $maxDeep && is_array($value)) {
            $newDeep = ++$deep;
            foreach ($value as $single_value) {
                $this->append($single_value, $maxDeep, $newDeep);
            }
        } else {
            parent::append($value);
        }
    }

    public function getModelClass(): string
    {
        return $this->modelClass;
    }

    public function setModelClass(string $modelClass)
    {
        $this->modelClass = $modelClass;

        return $this;
    }
}
