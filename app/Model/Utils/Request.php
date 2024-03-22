<?php
declare(strict_types=1);

namespace App\Model\Utils;

use InvalidArgumentException;

/**
 *
 */
final class Request
{

    public function getController(): string
    {
        return $_REQUEST["controller"] ?? "Home";
    }

    public function getAction(): string
    {
        return $_REQUEST["action"] ?? "index";
    }

    public function getData(string $verb): array
    {
        if ( $verb == "POST" )
        {
            return $_POST;
        }
        else if ( $verb == "GET" )
        {
            return $_GET;
        }

        throw new InvalidArgumentException("Invalid method!!");
    }
}