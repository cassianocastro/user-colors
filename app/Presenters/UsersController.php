<?php
declare(strict_types=1);

namespace App\Presenters;

use App\Model\Entities\{ User, Color };
use App\Model\Tables\{ UsersTable, ColorsTable, UserPaletteTable };
use App\Model\Utils\{ HtmlDocument, Request, Response, HTMLFormatter, Palette };
use src\view\{ UsersView, UsersFormView };

/**
 *
 */
final class UsersController
{

    public function index(): Response
    {
        $users = (new UsersTable())->getAll();

        return new Response(
            [
                "Content-Type: text/html"
            ],
            new HtmlDocument("users.php")
        );
    }

    public function showForm(Request $request): Response
    {
        $data = $request->getData("GET");

        if ( isset($data["id"]) )
        {
            $id      = intval($data["id"]);
            $user    = (new UsersTable())->findByID($id);
            $cfu     = (new UserPaletteTable())->getColorsFromUser($user);
            $colors  = (new ColorsTable())->getAll();
            $options = (new HTMLFormatter())->structOptionsWithSelectedAttr(
                [$cfu, $colors]
            );
            $view    = new UsersFormView(true, $options, $user);
        }
        else
        {
            $colors  = (new ColorsTable())->getAll();
            $options = (new HTMLFormatter())->structOptions($colors);
            $view    = new UsersFormView(false, $options, null);
        }

        // Browser::render($view);
    }

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