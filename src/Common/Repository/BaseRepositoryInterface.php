<?php

namespace Mile\Repository;

use Mile\Common\Model\CommonModel;

interface WriteRepositoryInterface
{
    public function save(CommonModel $commonClass);

    public function find(int $id) : CommonModel;
}
