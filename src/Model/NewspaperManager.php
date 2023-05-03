<?php

namespace App\Model;

use PDO;

class NewspaperManager extends AbstractManager
{
    public const TABLE = 'newspaper';

    public function selectAll(string $orderBy = 'number ', string $direction = 'DESC'): array
    {
        $query = 'SELECT * FROM ' . static::TABLE;
        if ($orderBy) {
            $query .= ' ORDER BY ' . $orderBy . ' ' . $direction;
        }

        return $this->pdo->query($query)->fetchAll();
    }
}
