<?php
declare(strict_types=1);

namespace App\Model\Entities;

/**
 *
 */
abstract class Entity
{

    private int $id;
    private string $name;

    public function __construct(int $id, string $name)
    {
        $this->name = $name;
        $this->id   = $id;
    }

    public function getID(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}