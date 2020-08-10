<?php

namespace Mile\Market\Opportunity;

use Mile\Common\Entity\CommonEntity;
use Mile\Market\Order\BuyOrder;
use Mile\Market\Order\SellOrder;

final class Opportunity extends CommonEntity
{
    private BuyOrder $buyOrder;
    private SellOrder $sellOrder;

    private OpportunityProfit $opportunityProfit;
    private OpportunityJumps $opportunityJumps;
    private OpportunityVolume $opportunityVolume;

    public function __construct(
        BuyOrder $buyOrder,
        SellOrder $sellOrder,
        OpportunityProfit $opportunityProfit,
        OpportunityJumps $opportunityJumps,
        OpportunityVolume $opportunityVolume
    ) {
        $this->buyOrder = $buyOrder;
        $this->sellOrder = $sellOrder;
        $this->opportunityProfit = $opportunityProfit;
        $this->opportunityJumps = $opportunityJumps;
        $this->opportunityVolume = $opportunityVolume;
    }

    public function getBuyOrder(): BuyOrder
    {
        return $this->buyOrder;
    }

    public function setBuyOrder(BuyOrder $buyOrder)
    {
        $this->buyOrder = $buyOrder;

        return $this;
    }

    public function getSellOrder(): SellOrder
    {
        return $this->sellOrder;
    }

    public function setSellOrder(SellOrder $sellOrder)
    {
        $this->sellOrder = $sellOrder;

        return $this;
    }

    public function getOpportunityProfit(): OpportunityProfit
    {
        return $this->opportunityProfit;
    }

    public function setOpportunityProfit(OpportunityProfit $opportunityProfit)
    {
        $this->opportunityProfit = $opportunityProfit;

        return $this;
    }

    public function getOpportunityJumps(): OpportunityJumps
    {
        return $this->opportunityJumps;
    }

    public function setOpportunityJumps(OpportunityJumps $opportunityJumps)
    {
        $this->opportunityJumps = $opportunityJumps;

        return $this;
    }

    public function getOpportunityVolume(): OpportunityVolume
    {
        return $this->opportunityVolume;
    }

    public function setOpportunityVolume(OpportunityVolume $opportunityVolume)
    {
        $this->opportunityVolume = $opportunityVolume;

        return $this;
    }
}
