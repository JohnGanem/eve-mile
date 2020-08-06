<?php

namespace Mile\Market\Order;

final class BuyOrder extends Order
{
    private OrderMinVolume $orderMinVolume;
    private OrderRange $orderRange;

    public function withOrderMinVolume(OrderMinVolume $orderMinVolume): self
    {
        $this->setOrderMinVolume($orderMinVolume);
        return $this;
    }

    public function withOrderRange(OrderRange $orderRange): self
    {
        $this->setOrderRange($orderRange);
        return $this;
    }

    public function getOrderMinVolume(): OrderMinVolume
    {
        return $this->orderMinVolume;
    }

    public function setOrderMinVolume(OrderMinVolume $orderMinVolume)
    {
        $this->orderMinVolume = $orderMinVolume;

        return $this;
    }

    public function getOrderRange(): OrderRange
    {
        return $this->orderRange;
    }

    public function setOrderRange(OrderRange $orderRange)
    {
        $this->orderRange = $orderRange;

        return $this;
    }
}
