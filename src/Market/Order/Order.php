<?php

namespace Mile\Market\Order;

use Mile\Common\Entity\CommonEntity;
use Mile\Universe\Station\StationId;
use Mile\Universe\System\SystemId;

abstract class Order extends CommonEntity
{
    private OrderId $orderId;
    private OrderDuration $orderDuration;
    private OrderIssued $orderIssued;
    private OrderPrice $orderPrice;
    private OrderVolume $orderVolume;

    private StationId $stationId;
    private SystemId $systemId;

    public function withOrderId(OrderId $orderId): self
    {
        $this->setOrderId($orderId);
        return $this;
    }

    public function withOrderDuration(OrderDuration $orderDuration): self
    {
        $this->setOrderDuration($orderDuration);
        return $this;
    }

    public function withOrderIssued(OrderIssued $orderIssued): self
    {
        $this->setOrderIssued($orderIssued);
        return $this;
    }

    public function withOrderPrice(OrderPrice $orderPrice): self
    {
        $this->setOrderPrice($orderPrice);
        return $this;
    }

    public function withOrderVolume(OrderVolume $orderVolume): self
    {
        $this->setOrderVolume($orderVolume);
        return $this;
    }

    public function withStationId(StationId $stationId): self
    {
        $this->setStationId($stationId);
        return $this;
    }

    public function withSystemId(SystemId $systemId): self
    {
        $this->setSystemId($systemId);
        return $this;
    }

    public function getOrderId(): OrderId
    {
        return $this->orderId;
    }

    public function setOrderId(OrderId $orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getOrderDuration(): OrderDuration
    {
        return $this->orderDuration;
    }

    public function setOrderDuration(OrderDuration $orderDuration)
    {
        $this->orderDuration = $orderDuration;

        return $this;
    }

    public function getOrderIssued(): OrderIssued
    {
        return $this->orderIssued;
    }

    public function setOrderIssued(OrderIssued $orderIssued)
    {
        $this->orderIssued = $orderIssued;

        return $this;
    }

    public function getOrderPrice(): OrderPrice
    {
        return $this->orderPrice;
    }

    public function setOrderPrice(OrderPrice $orderPrice)
    {
        $this->orderPrice = $orderPrice;

        return $this;
    }

    public function getOrderVolume(): OrderVolume
    {
        return $this->orderVolume;
    }

    public function setOrderVolume(OrderVolume $orderVolume)
    {
        $this->orderVolume = $orderVolume;

        return $this;
    }

    public function getStationId(): StationId
    {
        return $this->stationId;
    }

    public function setStationId(StationId $stationId)
    {
        $this->stationId = $stationId;

        return $this;
    }

    public function getSystemId(): SystemId
    {
        return $this->systemId;
    }

    public function setSystemId(SystemId $systemId)
    {
        $this->systemId = $systemId;

        return $this;
    }
}
