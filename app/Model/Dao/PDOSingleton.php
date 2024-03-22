<?php
declare(strict_types=1);

namespace App\Model\Dao;

use PDO, PDOException;
use App\Model\Utils\PathReader;

/**
 *
 */
final class PDOSingleton
{

    private static ?PDO $connection = NULL;

    private function __construct() {}

    static public function getInstance(): PDO
    {
        if ( is_null(self::$connection) )
        {

            $filePath = (new PathReader())->read(
                __DIR__ . "/../../lib/database/db.sqlite"
            );

            try
            {
                self::$connection = new PDO("sqlite:$filePath");
                self::$connection->exec("PRAGMA foreign_keys = ON");
            }
            catch ( PDOException $e )
            {
                die($e->getMessage());
            }
        }

        return self::$connection;
    }
}