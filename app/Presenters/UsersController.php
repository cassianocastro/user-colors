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

    public function insert(Request $request): Response
    {
        $data   = $request->getData("POST");
        $name   = $data["name"];
        $email  = $data["email"];
        $colors = $data["colors"];

        $palette = new Palette();

        foreach ( $colors as $color )
        {
            $palette->add(
                (new Color($color["id"], $color["name"], $color["hexCode"]))
            );
        }

        $user = new User(0, $name, $email, $palette);

        (new UsersTable())->insert($user);
        (new UserPaletteTable())->insertColorsFrom($user);

        return "User registered.";
    }

    public function update(Request $request): Response
    {
        $data    = $request->getData("POST");
        $id      = intval($data["id"]);
        $name    = $data["name"];
        $email   = $data["email"];
        $colors  = $data["colors"];

        $palette = new Palette();

        foreach ( $colors as $color )
        {
            $palette->add(
                (new Color($color["id"], $color["name"], $color["hexCode"]))
            );
        }
        $user = new User($id, $name, $email, $palette);

        (new UsersTable())->update($user);
        (new UserPaletteTable())->updateColorsFrom($user);

        if ( $updated )
        {
            return "User Updated.";
        }

        return "User not updated...Sorry";
    }

    public function delete(Request $request): Response
    {
        $data          = $request->getData("GET");
        $id            = intval($data["id"]);
        $userDeleted   = (new UsersTable())->delete($id);

        if ( $userDeleted )
        {
            return "User deleted.";
        }

        return "User not deleted...Sorry";
    }
}