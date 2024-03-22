<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Model\Utils\Response;
use App\View\View;

/**
 *
 */
final class CvController implements IController
{

    public function index(): Response
    {
        Browser::render(
            new class extends View
            {
                protected const TEMPLATE = "cv.php";
            }
        );
    }
}