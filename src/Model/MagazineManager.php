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

    /**
     * Insert new item in database
     */
    public function insert(array $magazine): int
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (`cover`) VALUES (:cover)");
        $statement->bindValue('cover', $magazine['cover'], PDO::PARAM_STR);

        $statement->execute();
        return (int)$this->pdo->lastInsertId();
    }

    /**
     * Update item in database
     */
    public function update(array $magazine): bool
    {
        $statement = $this->pdo->prepare("UPDATE " . self::TABLE . " SET `cover` = :cover WHERE id=:id");
        $statement->bindValue('id', $magazine['id'], PDO::PARAM_INT);
        $statement->bindValue('cover', $magazine['cover'], PDO::PARAM_STR);

        return $statement->execute();
    }
}