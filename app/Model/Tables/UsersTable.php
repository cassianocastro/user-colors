<?php
declare(strict_types=1);

namespace App\Model\Tables;

use PDO;
use App\Model\Dao\PDOSingleton as Connection;
use App\Model\Entities\User;

/**
 *
 */
final class UsersTable
{

    protected PDO $connection;

    public function __construct()
    {
        $this->connection = Connection::getInstance();
    }

    public function insert(User $user): void
    {
        $statement = $this->connection->prepare(
            "INSERT INTO users(name, email) VALUES (?, ?)"
        );
        $statement->bindValue(1, $user->getName(), PDO::PARAM_STR);
        $statement->bindValue(2, $user->getEmail(), PDO::PARAM_STR);

        $statement->execute();
    }

    public function update(User $user): void
    {
        $statement = $this->connection->prepare(
            "UPDATE users SET name = ?, email = ? WHERE id = ?"
        );
        $statement->bindValue(1, $user->getName(), PDO::PARAM_STR);
        $statement->bindValue(2, $user->getEmail(), PDO::PARAM_STR);
        $statement->bindValue(3, $user->getID(), PDO::PARAM_INT);

        $statement->execute();
    }

    public function delete(User $user): void
    {
        $statement = $this->connection->prepare(
            "DELETE FROM users WHERE id = ?"
        );
        $statement->bindValue(1, $user->getID(), PDO::PARAM_INT);

        $statement->execute();
    }

    public function getAll(): iterable
    {
        $statement = $this->connection->query(
            "SELECT id, name, email FROM users"
        );

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findByID(int $id): iterable
    {
        $statement = $this->connection->prepare(
            "SELECT id, name, email FROM users WHERE id = ?"
        );
        $statement->bindValue(1, $id, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}