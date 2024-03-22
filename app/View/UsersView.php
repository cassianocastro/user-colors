<?php
declare(strict_types=1);

namespace App\View;

/**
 *
 */
final class UsersView extends View
{

    protected const TEMPLATE = "users.php";

    protected iterable $users;

    public function __construct(iterable $users)
    {
        parent::__construct();

        $this->users = $users;
    }
}