<?php
declare(strict_types=1);

namespace App\Presenters;

use App\Model\Utils\{ HtmlDocument, Response };

/**
 *
 */
final class CvController
{

    public function index(): void
    {
        header("Content-Type: application/pdf");
        header("Content-Disposition: attachment; filename: Curriculum.pdf");

        $fp = fopen("php://output", "w");

        fwrite($fp, file_get_contents("./lib/Curriculum.pdf"));

        fclose($fp);
    }
}