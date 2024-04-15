<?php
declare(strict_types=1);

namespace App\Presenters;

use App\Model\Entities\{ Color, User };
use App\Model\Tables\{ ColorsTable, UsersTable };
use App\Model\Utils\{ HtmlDocument, Response };

/**
 *
 */
final class HomePresenter
{

    public function index(): Response
    {
        $r_users  = (new UsersTable())->getAll();
        $r_colors = (new ColorsTable())->getAll();

        // echo "<pre>", var_dump($r_users, $r_colors), "</pre>";

        $users = [];

        foreach ($r_users as $user)
        {
            extract($user);

            $users[$id] = new User($name, $email);
        }

        // array_shift($users);

        $colors = [];

        foreach ($r_colors as $color)
        {
            extract($color);

            $colors[$id] = new Color($name, $hexcode);
        }

        // array_shift($colors);

        // echo "<pre>", var_dump($users, $colors), "</pre>";

        return new Response(
            [
                "Content-Type: text/html"
            ],
            new HtmlDocument(
                "home/index.twig",
                [
                    "users"  => $users,
                    "colors" => $colors
                ]
            )
        );
    }
}