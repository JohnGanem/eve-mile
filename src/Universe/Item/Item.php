<?php

namespace Mile\Universe\Item;

use Mile\Common\Model\CommonModel;

final class Item extends CommonModel
{
    private $itemId;
    private $itemName;
    private $itemIcon;

    public function __construct(ItemId $itemId, ItemName $itemName, ItemIcon $itemIcon)
    {
        $this->itemId = $itemId;
        $this->itemName = $itemName;
        $this->itemIcon = $itemIcon;
    }

    public function getItemId(): ItemId
    {
        return $this->itemId;
    }

    public function setItemId(ItemId $itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    public function getItemName(): ItemName
    {
        return $this->itemName;
    }

    public function setItemName(ItemName $itemName)
    {
        $this->itemName = $itemName;

        return $this;
    }

    public function getItemIcon(): ItemIcon
    {
        return $this->itemIcon;
    }

    public function setItemIcon(ItemIcon $itemIcon)
    {
        $this->itemIcon = $itemIcon;

        return $this;
    }
}
