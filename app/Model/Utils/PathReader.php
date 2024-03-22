<?php
declare(strict_types=1);

namespace App\Model\Utils;

/**
 *
 */
final class PathReader
{

    public function read(string $path): string
    {
        return realpath($path);
    }
}