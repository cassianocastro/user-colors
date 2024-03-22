<?php
declare(strict_types=1);

namespace App\Model\Utils;

/**
 *
 */
final class Dispatcher
{

    public function dispatch(Request $request): void
    {
        $controller = $request->getController();
        $action     = $request->getAction();

        $className  = ucfirst($controller);
        $controller = "src\\controllers\\{$className}Controller";

        if ( class_exists($controller) and method_exists($controller, $action) )
        {
            $response = call_user_func([new $controller(), $action], $request);

            if ( is_string($response) )
            {
                Browser::render($response);
            }
        }
    }
}