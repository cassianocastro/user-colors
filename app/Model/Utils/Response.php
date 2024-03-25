<?php
declare(strict_types=1);

namespace App\Model\Utils;

/**
 *
 */
final class Response
{

    private array $headers;
    private Body $body;

    public function __construct(array $headers, Body $body)
    {
        $this->headers = $headers;
        $this->body    = $body;
    }

    public function setHeader(string $header): void
    {
        $this->headers[] = $header;
    }

    public function getBody(): Body
    {
        return $this->body;
    }
}