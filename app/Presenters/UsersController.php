<?php
declare(strict_types=1);

namespace App\Presenters;

use App\Model\Entities\{ User, Color };
use App\Model\Tables\{ UsersTable, UserPaletteTable };
use App\Model\Utils\{ Request, Response, Palette };

/**
 *
 */
final class UsersController
{

    public function addUser(Request $request): Response
    {
        $data   = $request->getData("POST");
        $name   = $data["name"];
        $email  = $data["email"];
        $colors = $data["colors"];

        $palette = new Palette();

        foreach ( $colors as $color )
        {
            $palette->add(new Color($color["name"], $color["hexCode"]));
        }

        $user = new User($name, $email);

        (new UsersTable())->insert($user);
        (new UserPaletteTable())->insertColorsFrom($user);

        return "User registered.";
    }

    public function updateUser(Request $request): Response
    {
        $data    = $request->getData("POST");
        $id      = intval($data["id"]);
        $name    = $data["name"];
        $email   = $data["email"];
        $colors  = $data["colors"];

        $palette = new Palette();

        foreach ( $colors as $color )
        {
            $palette->add(new Color($color["name"], $color["hexCode"]));
        }

        $user = new User($name, $email);

        (new UsersTable())->update($user);
        (new UserPaletteTable())->updateColorsFrom($user);
    }

    public function deleteUser(Request $request): Response
    {
        $data          = $request->getData("GET");
        $id            = intval($data["id"]);
        $userDeleted   = (new UsersTable())->delete();

        if ( $userDeleted )
        {
            return "User deleted.";
        }

        return "User not deleted...Sorry";
    }
}