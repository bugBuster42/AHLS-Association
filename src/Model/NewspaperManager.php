<?php

namespace App\Model;

use PDO;

class NewspaperManager extends AbstractManager
{
    public const TABLE = 'newspaper';

    public function showLastByNumber(): array
    {
        $query = "SELECT * FROM " . static::TABLE . " ORDER BY number DESC LIMIT 2";
        return $this->pdo->query($query)->fetchAll();
    }
}
