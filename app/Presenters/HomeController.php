<?php
declare(strict_types=1);

namespace App\Presenters;

use App\Model\Utils\{ HtmlDocument, Response };

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
            new HtmlDocument("index.php")
        );
    }
}