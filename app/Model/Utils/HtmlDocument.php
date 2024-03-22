<?php
declare(strict_types=1);

namespace App\Model\Utils;

/**
 *
 */
final class HtmlDocument implements IDocument
{

    private string $name;
    private string $path;
    private string $content;

    public function __construct(string $name, string $path, string $content)
    {
        $this->name    = $name;
        $this->path    = $path;
        $this->content = $content;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}