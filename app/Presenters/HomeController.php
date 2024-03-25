<?php
declare(strict_types=1);

namespace App\Presenters;

use App\Model\Utils\{ Body, HtmlDocument, Response };

/**
 *
 */
final class HomeController
{

    public function index(): Response
    {
        return new Response(
            [
                "Content-Type: text/html"
            ],
            new Body(
                new HtmlDocument(__DIR__ . "/../../public/templates/index.php")
            )
        );
    }
}