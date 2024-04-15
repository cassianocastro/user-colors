<?php
declare(strict_types=1);

namespace App\Model\Utils;

/**
 *
 */
final class HtmlDocument implements IDocument
{

    private const PATH = __DIR__ . "/../../../public/templates/";

    private array $params;
    private string $name;
    private string $content;

    public function __construct(string $name, array $params)
    {
        $this->name   = $name;
        $this->params = $params;
    }

    public function getPath(): string
    {
        return $this->name;
    }

    public function getContent(): string
    {
        ob_start();

        require_once self::PATH . $this->name;

        $this->content = ob_get_contents();
        ob_end_clean();

        return $this->content;
    }
}