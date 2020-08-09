<?php

namespace Mile\Universe\System;

use Mile\Common\Entity\CommonEntity;
use Mile\Universe\Constellation\ConstellationId;

final class System extends CommonEntity
{
    private SystemId $systemId;
    private SystemName $systemName;
    private SystemSecurityStatus $systemSecurityStatus;

    public function __construct(
        SystemId $systemId,
        SystemName $systemName,
        SystemSecurityStatus $systemSecurityStatus
    ) {
        $this->systemId = $systemId;
        $this->systemName = $systemName;
        $this->systemSecurityStatus = $systemSecurityStatus;
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

    public function getSystemName(): SystemName
    {
        return $this->systemName;
    }

    public function setSystemName(SystemName $systemName)
    {
        $this->systemName = $systemName;

        return $this;
    }

    public function getSystemSecurityStatus(): SystemSecurityStatus
    {
        return $this->systemSecurityStatus;
    }

    public function setSystemSecurityStatus(SystemSecurityStatus $systemSecurityStatus)
    {
        $this->systemSecurityStatus = $systemSecurityStatus;

        return $this;
    }
}
