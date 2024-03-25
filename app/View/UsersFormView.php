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
            <form action="{$this->qs->create("users", "insert")}" method="POST" spellcheck="true" autocomplete="off">
                <div>
                    <fieldset>
                        <legend>New User</legend>

                        <label title="Somente caracteres de A-Z e/ou a-z, 0-9 e _">
                            User Name:

                            <input type="text" name="name" maxlength="100" placeholder="user_Name123" pattern="(\w)+" autofocus required>
                        </label>

                        <label>
                            User e-mail:

                            <input type="email" name="email" maxlength="100" placeholder="example@example.com" required>
                        </label>

                        <label title="Você pode selecionar mais de uma opção segurando Ctrl e clicando com o mouse.">
                            Color:

                            <select name="colors[]" multiple required>
                                $this->options
                            </select>
                        </label>
                    </fieldset>

                    <menu>
                        <li><button type="reset">Limpar</button></li>
                        <li><button type="submit">Enviar</button></li>
                    </menu>
                </div>
            </form>
        HTML;
    }

    public function getUpdateForm(): string
    {
        return <<<HTML
            <form action="{$this->qs->create("users", "update")}" method="POST" spellcheck="true" autocomplete="off">
                <div>
                    <fieldset>
                        <legend>Edit User</legend>

                        <input type="hidden" name="id" value="{$this->user->getID()}">

                        <label title="Somente caracteres de A-Z e/ou a-z, 0-9 e _">
                            User Name:

                            <input type="text" name="name" value="{$this->user->getName()}" maxlength="100" placeholder="user_Name123" pattern="(\w)+" autofocus required>
                        </label>

                        <label>
                            User e-mail:

                            <input type="email" name="email" value="{$this->user->getEmail()}" maxlength="100" placeholder="example@example.com" required>
                        </label>

                        <label title="Você pode selecionar mais de uma opção segurando Ctrl e clicando com o mouse.">
                            Color:

                            <select name="colors[]" multiple required>
                                $this->options
                            </select>
                        </label>
                    </fieldset>

                    <menu>
                        <li><button type="reset">Limpar</button></li>
                        <li><button type="submit">Enviar</button></li>
                    </menu>
                </div>
            </form>
        HTML;
    }
}