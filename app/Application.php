<?php
declare(strict_types=1);

namespace App;

use App\Model\Utils\{ Request, Dispatcher };

/**
 *
 */
final class Application
{

    private Dispatcher $dispatcher;

    public function __construct()
    {
        $this->dispatcher = new Dispatcher();
    }

    public function receive(Request $request): void
    {
        $this->dispatcher->dispatch($request);
    }
}