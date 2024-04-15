<?php
declare(strict_types=1);

namespace App\Model\Entities;

/**
 *
 */
final class Color
{

    private string $name;
    private string $hexcode;

    public function __construct(string $name, string $hexcode)
    {
        $this->name    = $name;
        $this->hexcode = $hexcode;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHexCode(): string
    {
        return $this->hexcode;
    }
}