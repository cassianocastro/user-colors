<?php
declare(strict_types=1);

namespace App\Model\Utils;

/**
 *
 */
final class HTMLFormatter
{

    public function structOptions(iterable $colors): string
    {
        $options = "";

        foreach ( $colors as $color )
        {
            $options .= sprintf(
                <<<HTML
                    <option value="%d" label="%s"></option>
                HTML,
                $color->getID(),
                $color->getName()
            );
        }

        return $options;
    }

    public function structOptionsWithSelectedAttr(iterable $colors): string
    {
        [ $options, $selecteds ] = [ "", [] ];

        foreach ( $colors[0] as $colorsFromUser )
        {
            $selecteds[] = $colorsFromUser["color_id"];
        }

        foreach ( $colors[1] as $color )
        {
            $options .= sprintf(
                <<<HTML
                    <option %s value="%d" label="%s"></option>
                HTML,
                (in_array($color->getID(), $selecteds)) ? "selected" : "",
                $color->getID(),
                $color->getName()
            );
        }

        return $options;
    }
}