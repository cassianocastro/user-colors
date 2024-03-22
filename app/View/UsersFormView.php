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
                    <div>
                        <fieldset>
                            <legend>New User</legend>
                            <div>
                                <label for="">User Name:</label>
                                <input type="text" name="name" autofocus maxlength="100" pattern="(\w)+" title="Somente caracteres de A-Z e/ou a-z, 0-9 e _" placeholder="user_Name123" required>

                                <label for="">User e-mail:</label>
                                <input type="email" name="email" maxlength="100" placeholder="example@example.com" required>

                                <label for="">Color:</label>
                                <select id="" name="colors[]" multiple title="Você pode selecionar mais de uma opção segurando Ctrl e clicando com o mouse." required>
                                    $this->options
                                </select>
                            </div>
                        </fieldset>
                    </div>
                    <div>
                        <menu>
                            <div>
                                <li><button type="reset">Limpar</button></li>
                                <li><button type="submit">Enviar</button></li>
                            </div>
                        </menu>
                    </div>
                </div>
            </form>
        HTML;
    }

    public function getUpdateForm(): string
    {
        return <<<HTML
            <form action="{$this->qs->create("users", "update")}" method="POST" spellcheck="true" autocomplete="off">
                <div>
                    <div>
                        <fieldset>
                            <legend>Edit User</legend>
                            <div>
                                <input type="hidden" name="id" value="{$this->user->getID()}">

                                <label>User Name:</label>
                                <input type="text" name="name" value="{$this->user->getName()}" autofocus maxlength="100" pattern="(\w)+" title="Somente caracteres de A-Z e/ou a-z, 0-9 e _" placeholder="user_Name123" required>

                                <label>User e-mail:</label>
                                <input type="email" name="email" value="{$this->user->getEmail()}" maxlength="100" placeholder="example@example.com" required>

                                <label>Color:</label>
                                <select id="" name="colors[]" multiple title="Você pode selecionar mais de uma opção segurando Ctrl e clicando com o mouse." required>
                                    $this->options
                                </select>
                            </div>
                        </fieldset>
                    </div>
                    <div>
                        <menu>
                            <div>
                                <li><button type="reset">Limpar</button></li>
                                <li><button type="submit">Enviar</button></li>
                            </div>
                        </menu>
                    </div>
                </div>
            </form>
        HTML;
    }
}