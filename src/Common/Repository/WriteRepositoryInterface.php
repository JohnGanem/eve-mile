<?php

namespace Mile\Common\Repository;

use Mile\Common\Entity\CommonEntity;

interface WriteRepositoryInterface
{
    public function save(CommonEntity $commonEntity);

    public function find(int $id) : CommonEntity;
}
