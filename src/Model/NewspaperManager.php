<?php

namespace App\Model;

use PDO;

class NewspaperManager extends AbstractManager
{
    public const TABLE = 'newspaper';

    public function indexLastByNumber(): array
    {
        $query = "SELECT cover, date, link, MAX(number) FROM " . static::TABLE;
        return $this->pdo->query($query)->fetchAll();
    }
}
