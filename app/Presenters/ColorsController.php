<?php
declare(strict_types=1);

namespace App\Presenters;

use App\Model\Entities\Color;
use App\Model\Tables\ColorsTable;
use App\Model\Utils\{ Request, Response };

/**
 *
 */
final class ColorsController
{

    public function showForm(Request $request): Response
    {
        $data = $request->getData("GET");

        if ( isset($data["id"]) )
        {
            $id    = intval($data["id"]);
            $color = (new ColorsTable())->findByID($id);
        }

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