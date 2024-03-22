<?php
declare(strict_types=1);

namespace App\View;

/**
 *
 */
final class ResponseView extends View
{

    protected const TEMPLATE = "response.php";

    protected string $response;

    public function __construct(string $response)
    {
        parent::__construct();

        $this->response = $response;
    }
}