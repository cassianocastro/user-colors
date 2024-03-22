<?php
declare(strict_types=1);

namespace App\Model\Entities;

use App\Model\Utils\Palette;

/**
 *
 */
final class User extends Entity
{

    private string $email;
    private Palette $palette;

    public function __construct(int $id, string $name, string $email, Palette $palette)
    {
        parent::__construct($id, $name);

        $this->email   = $email;
        $this->palette = $palette;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPalette(): Palette
    {
        return $this->palette;
    }
}