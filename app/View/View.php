<?php
declare(strict_types=1);

namespace App\View;

use Stringable;
use App\Model\Utils\QSCreator;

/**
 *
 */
abstract class View implements Stringable
{

    protected const TEMPLATE = "";

    protected QSCreator $qs;

    public function __construct()
    {
        $this->qs = new QSCreator();
    }

    public function __toString(): string
    {
        ob_start();

        require_once __DIR__ . "/../public/templates/" . static::TEMPLATE;

        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }
}