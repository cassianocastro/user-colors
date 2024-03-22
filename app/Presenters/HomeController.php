<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Model\Utils\Response;
use App\View\HomeView;

/**
 *
 */
final class HomeController implements IController
{

    public function index(): Response
    {
        // Browser::render(new HomeView());
    }
}