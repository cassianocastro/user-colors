<?php
declare(strict_types=1);

namespace App\Model\Utils;

/**
 *
 */
final class Response
{

    private array $headers;
    private IDocument $document;

    public function __construct(array $headers, IDocument $document)
    {
        $this->headers  = $headers;
        $this->document = $document;
    }

    public function setHeader(string $header): void
    {
        $this->headers[] = $header;
    }

    public function getBody(): IDocument
    {
        return $this->document;
    }
}