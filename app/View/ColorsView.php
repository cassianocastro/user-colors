<?php
declare(strict_types=1);

namespace App\View;

/**
 *
 */
final class ColorsView extends View
{

    protected const TEMPLATE = "colors.php";

    protected iterable $colors;

    public function __construct(iterable $colors)
    {
        parent::__construct();

        $this->colors = $colors;
    }
}