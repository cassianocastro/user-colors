<?php
declare(strict_types=1);

namespace App\Model\Tables;

use PDO;
use src\model\entities\Color;

/**
 *
 */
final class ColorsTable extends Table
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert(Color $color): void
    {
        $statement = $this->connection->prepare(
            "INSERT INTO colors (name, hexCode) VALUES (?, ?)"
        );
        $statement->bindValue(1, $color->getName(), PDO::PARAM_STR);
        $statement->bindValue(2, $color->getHexCode(), PDO::PARAM_STR);

        $statement->execute();
    }

    public function update(Color $color): void
    {
        $statement = $this->connection->prepare(
            "UPDATE colors SET name = ?, hexCode = ? WHERE id = ?"
        );
        $statement->bindValue(1, $color->getName(), PDO::PARAM_STR);
        $statement->bindValue(2, $color->getHexCode(), PDO::PARAM_STR);
        $statement->bindValue(3, $color->getID(), PDO::PARAM_INT);

        $statement->execute();
    }

    public function delete(Color $color): void
    {
        $statement = $this->connection->prepare(
            "DELETE FROM colors WHERE id = ?"
        );
        $statement->bindValue(1, $color->getID(), PDO::PARAM_INT);

        $statement->execute();
    }

    public function getAll(): iterable
    {
        $statement = $this->connection->query(
            "SELECT id, name, hexCode FROM colors"
        );

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findByID(int $id): iterable
    {
        $statement = $this->connection->prepare(
            "SELECT id, name, hexCode FROM colors WHERE id = ?"
        );
        $statement->bindValue(1, $id, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}