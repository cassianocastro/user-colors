<?php
declare(strict_types=1);

namespace App\Model\Utils;

/**
 *
 */
final class Headers
{

    private iterable $headers;

    public function __construct(iterable $headers = [])
    {
        $this->headers = $headers;
    }

    public function getHeaders(): iterable
    {
        return $this->headers;
    }
}