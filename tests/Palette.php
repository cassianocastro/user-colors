<?php
declare(strict_types=1);

namespace App\Model\Utils;

use App\Model\Entities\Color;

/**
 *
 */
final class Palette
{

    private iterable $colors;

    public function __construct()
    {
        $this->colors = [];
    }

    public function add(Color $color): void
    {
        $this->colors[] = $color;
    }

    public function getColors(): iterable
    {
        return $this->colors;
    }
}