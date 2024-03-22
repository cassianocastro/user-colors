<?php
declare(strict_types=1);

namespace App\Model\Utils;

/**
 *
 */
final class Response
{

    private Headers $headers;
    private Body $body;

    public function __construct(Headers $headers, Body $body)
    {
        $this->headers = $headers;
        $this->body    = $body;
    }

    public function setHeader(Headers $headers): void
    {
        $this->headers = $headers;
    }

    public function getBody(): Body
    {
        return $this->body;
    }
}