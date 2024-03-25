<?php
declare(strict_types=1);

namespace App\Presenters;

use App\Model\Entities\Color;
use App\Model\Tables\ColorsTable;
use App\Model\Utils\{ HtmlDocument, Request, Response, HTMLFormatter, Palette };
use App\View\{ ColorsView, ColorsFormView };

/**
 *
 */
final class ColorsController
{

    public function index(): Response
    {
        $colors = (new ColorsTable())->getAll();
        $view   = new ColorsView($colors);

        return new Response(
            [
                "Content-Type: text/html"
            ],
            new HtmlDocument("colors.php")
        );
    }

    public function showForm(Request $request): Response
    {
        $data = $request->getData("GET");

        if ( isset($data["id"]) )
        {
            $id    = intval($data["id"]);
            $color = (new ColorsTable())->findByID($id);
            $view  = new ColorsFormView(true, $color);
        }
        else
            $view = new ColorsFormView(false);

        // Browser::render($view);
    }

    public function insert(Request $request): Response
    {
        $data     = $request->getData("POST");
        $name     = $data["name"];
        $hexCode  = $data["hexCode"];
        $inserted = (new ColorsTable())->insert(new Color(0, $name, $hexCode));

        if ( $inserted )
        {
            return "Color registered.";
        }

        return "Color not registered.";
    }

    public function update(Request $request): Response
    {
        $data    = $request->getData("POST");
        $id      = intval($data["id"]);
        $name    = $data["name"];
        $hexCode = $data["hexCode"];

        $updated = (new ColorsTable())->update(new Color($id, $name, $hexCode));

        if ( $updated )
        {
            return "Color updated.";
        }

        return "Color not updated.";
    }

    public function delete(Request $request): Response
    {
        $data = $request->getData("GET");
        $id   = intval($data["id"]);

        $colorDeleted = (new ColorsTable())->delete($id);

        if ( $colorDeleted )
        {
            return "Color deleted.";
        }

        return "Color not deleted.";
    }
}