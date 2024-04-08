"use strict";

/**
 *
 */
function index()
{
    const section = document.querySelector("#users");
    const menu    = document.querySelector("#users-context");
    const dialog  = document.querySelector("dialog:first-of-type");

    {
        const button = section.querySelector("[title='Add a new user']");

        button.addEventListener("click", () => dialog.show());
    }

    {
        const buttons = section.querySelectorAll("menu button");

        for ( const button of buttons )
        {
            button.addEventListener("click", (e) => {
                e.stopImmediatePropagation();

                const styles = { display: "flex", inset: `${e.y}px auto auto ${e.x}px` };

                Object.assign(menu.style, styles);
            });
        }

        document.addEventListener("click", () => {
            if ( menu.style.display == "flex" )
            {
                menu.style.display = "none";
            }
        });
    }
}

export { index };