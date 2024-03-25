<?php
declare(strict_types=1);

namespace App\Model\Utils;

/**
 *
 */
final class HtmlDocument
{

    private QSCreator $qs;
    private string $path;
    private string $content;

    public function __construct(string $path)
    {
        $this->path = $path;
        $this->qs   = new QSCreator();
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getContent(): string
    {
        ob_start();

        require_once $this->path;

        $this->content = ob_get_contents();
        ob_end_clean();

        return $this->content;
    }
}