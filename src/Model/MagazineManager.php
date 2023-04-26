<?php

namespace App\Model;

use App\Model\AbstractManager;
use PDO;

class MagazineManager extends AbstractManager
{
    public const TABLE = 'magazine';

    public function __construct()
    {
        parent::__construct();
    }
}