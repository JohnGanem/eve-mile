<?php

namespace Mile\Universe\Region;

use Mile\Common\Entity\CommonEntity;
use Mile\Universe\System\SystemArray;

final class Region extends CommonEntity
{
    private RegionId $regionId;

    private RegionName $regionName;

    private SystemArray $systemArray;

    public function __construct(RegionId $regionId, RegionName $regionName, SystemArray $systemArray)
    {
        $this->regionId = $regionId;
        $this->regionName = $regionName;
        $this->systemArray = $systemArray;
    }

    public function getRegionId(): RegionId
    {
        return $this->regionId;
    }

    public function setRegionId(RegionId $regionId)
    {
        $this->regionId = $regionId;

        return $this;
    }

    public function getRegionName(): RegionName
    {
        return $this->regionName;
    }

    public function setRegionName(RegionName $regionName)
    {
        $this->regionName = $regionName;

        return $this;
    }

    public function getSystemArray():SystemArray
    {
        return $this->systemArray;
    }

    public function setSystemArray(SystemArray $systemArray)
    {
        $this->systemArray = $systemArray;

        return $this;
    }
}
