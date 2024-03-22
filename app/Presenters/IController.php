<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Model\Utils\Response;

/**
 *
 */
interface IController
{

    public function index(): Response;
}