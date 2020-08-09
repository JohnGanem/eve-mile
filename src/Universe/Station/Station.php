<?php

namespace Mile\Universe\Station;

use Mile\Common\Entity\CommonEntity;
use Mile\Universe\System\SystemId;

final class Station extends CommonEntity
{
    private StationId $stationId;
    private StationName $stationName;
    private SystemId $systemId;

    public function __construct(StationId $stationId, StationName $stationName, SystemId $systemId)
    {
        $this->stationId = $stationId;
        $this->stationName = $stationName;
        $this->systemId = $systemId;
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

    public function getStationName(): StationName
    {
        return $this->stationName;
    }

    public function setStationName(StationName $stationName)
    {
        $this->stationName = $stationName;

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
