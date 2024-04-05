<?php
declare(strict_types=1);

namespace App\View;

use App\Model\Entities\User;

/**
 *
 */
final class UsersFormView extends View
{

    protected const TEMPLATE = "form.php";

    protected ?User $user;
    protected bool $update;
    protected string $options;

    public function __construct(bool $update, string $options, ?User $user = NULL)
    {
        parent::__construct();

        $this->update  = $update;
        $this->user    = $user;
        $this->options = $options;
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