<?php
declare(strict_types=1);

namespace App\Model\Tables;

use PDO;
use App\Model\Dao\PDOSingleton as Connection;
use App\Model\Entities\User;

/**
 *
 */
final class UserPaletteTable
{

    private PDO $connection;

    public function __construct()
    {
        $this->connection = Connection::getInstance();
    }

    public function insertColorsFrom(User $user): void
    {
        $userID = $user->getID();
        $colors = $user->getPalette()->getColors();

        $statement = $this->connection->prepare(
            "INSERT INTO user_colors (user_id, color_id) VALUES (?, ?)"
        );

        foreach ( $colors as $color )
        {
            $statement->bindValue(1, $userID, PDO::PARAM_INT);
            $statement->bindValue(2, $color, PDO::PARAM_INT);

            $statement->execute();
        }
    }

    public function getColorsFromUser(User $user): iterable
    {
        $statement = $this->connection->prepare(
            "SELECT color_id FROM user_colors WHERE user_id = ?"
        );
        $statement->bindValue(1, $user->getID(), PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateColorsFrom(User $user): void
    {
        $statement = $this->connection->prepare(
            "DELETE FROM user_colors WHERE user_id = ?"
        );
        $statement->bindValue(1, $user->getID(), PDO::PARAM_INT);
        $statement->execute();

        $this->insertColorsFrom($user);
    }
}