<?php
declare(strict_types=1);

namespace App\Model\Utils;

/**
 *
 */
interface IDocument
{

    public function getName(): string;

    public function getPath(): string;

    public function getContent(): string;
}