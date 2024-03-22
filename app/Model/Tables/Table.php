<?php
declare(strict_types=1);

namespace App\Model\Tables;

use PDO;
use App\Model\Dao\PDOSingleton as Connection;

/**
 *
 */
abstract class Table
{

    protected PDO $connection;

    public function __construct()
    {
        $this->connection = Connection::getInstance();
    }

    abstract public function getAll(): iterable;

    abstract public function delete(object $entity): void;
}