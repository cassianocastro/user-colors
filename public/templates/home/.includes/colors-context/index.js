"use strict";

/**
 *
 */
function index()
{
    const menu   = document.querySelector("#colors-context");

    {
        const dialog = document.querySelector("#cd");

        const name = dialog.querySelector("input[name='name']");
        const code = dialog.querySelector("input[name='hexcode']");

        name.value = "Pink";
        code.value = "#C35DB2";

        const button = menu.querySelector("[title='Update']");

        button.addEventListener("click", () => dialog.show());
    }
}

export { index };