<?php
declare(strict_types=1);

namespace App\Model\Utils;

/**
 *
 */
final class QSCreator
{

    public function create(string $controller, ?string $action = NULL, $params = NULL): string
    {
        if ( is_int($params) )
        {
            $params = "&id=$params";
        }

        if ( ! is_null($action) )
        {
            $action = "&action=$action";
        }

        return <<<QUERYSTRING
            ?controller=$controller{$action}$params
        QUERYSTRING;
    }
}