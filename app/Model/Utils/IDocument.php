<?php
declare(strict_types=1);

namespace App\Model\Utils;

/**
 *
 */
interface IDocument
{

    public function getPath(): string;

    public function getContent(): string;
}