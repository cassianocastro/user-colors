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

        if ( $className === "Home" )
        {
            $controller = "App\\Presenters\\{$className}Presenter";
        }
        else
        {
            $controller = "App\\Presenters\\{$className}Controller";
        }

        if ( class_exists($controller) and method_exists($controller, $action) )
        {
            $response = call_user_func([new $controller(), $action], $request);

            Browser::render($response);
        }
    }
}