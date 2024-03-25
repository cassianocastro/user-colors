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
            <form action="{$this->qs->create("colors", "insert")}" method="POST" spellcheck="true" autocomplete="off">
                <div>
                    <fieldset>
                        <legend>New Color</legend>

                        <label>
                            Color Name:

                            <input type="text" name="name" maxlength="100" pattern="([A-Za-z])+" title="Somente caracteres de A-Z e/ou a-z" placeholder="Informe o nome..." autofocus required>
                        </label>

                        <label>
                            Tonalidade:

                            <input type="color" name="hexCode" required>
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
            <form action="{$this->qs->create("colors", "update")}" method="POST" spellcheck="true" autocomplete="off">
                <div>
                    <fieldset>
                        <legend>Update Color</legend>

                        <input type="hidden" name="id" value="{$this->color->getID()}">

                        <label>
                            Color Name:

                            <input type="text" name="name" value="{$this->color->getName()}" maxlength="100" pattern="([A-Za-z])+" title="Somente caracteres de A-Z e/ou a-z" placeholder="Informe o nome..." autofocus required>
                        </label>

                        <label>
                            Tonalidade:

                            <input type="color" name="hexCode" value="{$this->color->getHexCode()}" required>
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