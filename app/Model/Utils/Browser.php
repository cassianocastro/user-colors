<?php
declare(strict_types=1);

namespace App\Model\Utils;

use Twig\{ Environment, Loader\FilesystemLoader };

/**
 *
 */
final class Browser
{

    private const PATH = __DIR__ . "/../../../public/templates/";

    static public function render(Response $response): void
    {
        $body = $response->getBody();

        if ( $body instanceof HtmlDocument )
        {
            $loader = new FilesystemLoader([self::PATH, self::PATH . ".includes"]);
            $env    = new Environment($loader);

            $name   = $body->getName();
            $params = $body->getParams();

            print $env->render($name, $params);
        }
    }
}