<?php
declare(strict_types=1);

namespace App\Model\Utils;

use Stringable;

/**
 *
 */
final class Body implements Stringable
{

    private IDocument $document;

    public function __construct(IDocument $document)
    {
        $this->document = $document;
    }

    public function __toString(): string
    {
        return $this->document->getContent();
    }
}