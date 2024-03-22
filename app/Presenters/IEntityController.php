<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Model\Utils\{ Request, Response };

/**
 *
 */
interface IEntityController extends IController
{

    public function insert(Request $request): Response;

    public function update(Request $request): Response;

    public function delete(Request $request): Response;
}