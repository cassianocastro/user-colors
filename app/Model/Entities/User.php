<?php
declare(strict_types=1);

namespace App\Model\Entities;

/**
 *
 */
final class User
{

    private string $name;
    private string $email;

    public function __construct(string $name, string $email)
    {
        $this->name  = $name;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}