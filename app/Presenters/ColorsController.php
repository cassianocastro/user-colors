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

    public function addColor(Request $request): Response
    {
        $data     = $request->getData("POST");
        $name     = $data["name"];
        $hexCode  = $data["hexCode"];

        $inserted = (new ColorsTable())->insert(new Color($name, $hexCode));

        if ( $inserted )
        {
            return "Color registered.";
        }

        return "Color not registered.";
    }

    public function updateColor(Request $request): Response
    {
        $data    = $request->getData("POST");
        $id      = intval($data["id"]);
        $name    = $data["name"];
        $hexCode = $data["hexCode"];

        $updated = (new ColorsTable())->update(new Color($name, $hexCode));

        if ( $updated )
        {
            return "Color updated.";
        }

        return "Color not updated.";
    }

    public function deleteColor(Request $request): Response
    {
        $data = $request->getData("GET");
        $id   = intval($data["id"]);

        $colorDeleted = (new ColorsTable())->delete();

        if ( $colorDeleted )
        {
            return "Color deleted.";
        }

        return "Color not deleted.";
    }
}