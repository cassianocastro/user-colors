<?php
declare(strict_types=1);

namespace App\View;

use App\Model\Entities\Color;

/**
 *
 */
final class ColorsFormView extends View
{

    protected const TEMPLATE = "form.php";
    protected bool $update;
    protected ?Color $color;

    public function __construct(bool $update, ?Color $color = NULL)
    {
        parent::__construct();

        $this->update = $update;
        $this->color  = $color;
    }

    public function getInsertForm(): string
    {
        return <<<HTML

        HTML;
    }

    public function getUpdateForm(): string
    {
        return <<<HTML

        HTML;
    }
}