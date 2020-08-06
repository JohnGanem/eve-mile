<?php

namespace Mile\Market\Order;

use Mile\Common\ValueObject\ArrayValue;

class OrderArray extends ArrayValue
{

    public function create(): self
    {
        return new self(Order::class);
    }
}
