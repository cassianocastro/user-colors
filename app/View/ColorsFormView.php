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
                    <div>
                        <fieldset>
                            <legend>New Color</legend>
                            <div>
                                <label id="label_name">Color Name:</label>
                                <input id="name" type="text" name="name" autofocus maxlength="100" pattern="([A-Za-z])+" title="Somente caracteres de A-Z e/ou a-z" placeholder="Informe o nome..." required>
                                <label id="label_hex">Tonalidade:</label>
                                <input id="hexCode" type="color" name="hexCode" required>
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
            <form action="{$this->qs->create("colors", "update")}" method="POST" spellcheck="true" autocomplete="off">
                <div>
                    <div>
                        <fieldset>
                            <legend>Update Color</legend>
                            <div>
                                <input type="hidden" name="id" value="{$this->color->getID()}">
                                <label>Color Name:</label>
                                <input type="text" name="name" value="{$this->color->getName()}" autofocus maxlength="100" pattern="([A-Za-z])+" title="Somente caracteres de A-Z e/ou a-z" placeholder="Informe o nome..." required>
                                <label>Tonalidade:</label>
                                <input type="color" name="hexCode" value="{$this->color->getHexCode()}" required>
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