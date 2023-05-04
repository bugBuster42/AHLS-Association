<?php

namespace App\Model;

use App\Model\AbstractManager;

class ActualityManager extends AbstractManager
{
    public const TABLE = 'actuality';

    public function __construct()
    {
        parent::__construct();
    }
}
