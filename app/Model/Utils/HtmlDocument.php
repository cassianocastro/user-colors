<?php
declare(strict_types=1);

namespace App\Model\Utils;

/**
 *
 */
final class HtmlDocument implements IDocument
{

    private string $name;
    private array $params;

    public function __construct(string $name, array $params)
    {
        $this->name   = $name;
        $this->params = $params;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getParams(): array
    {
        return $this->params;
    }
}