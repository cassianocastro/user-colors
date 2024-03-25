<?php
declare(strict_types=1);

namespace App\Presenters;

use App\Model\Utils\{ Body, Headers, HtmlDocument, Response };

/**
 *
 */
final class CvController
{

    public function index(): Response
    {
        return new Response(
            new Headers(),
            new Body(
                new HtmlDocument(__DIR__ . "/../../public/templates/cv.php")
            )
        );
    }
}