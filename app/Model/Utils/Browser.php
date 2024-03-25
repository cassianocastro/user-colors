<?php
declare(strict_types=1);

namespace App\Model\Utils;

/**
 *
 */
final class Browser
{

    static public function render(Response $response): void
    {
        print $response->getBody()->__toString();
    }
}