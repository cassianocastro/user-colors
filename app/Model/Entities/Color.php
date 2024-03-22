<?php
declare(strict_types=1);

namespace App\Model\Entities;

/**
 *
 */
final class Color extends Entity
{

    private string $hexCode;

    public function __construct(int $id, string $name, string $hexCode)
    {
        parent::__construct($id, $name);

        $this->hexCode = $hexCode;
    }

    public function getHexCode(): string
    {
        return $this->hexCode;
    }
}