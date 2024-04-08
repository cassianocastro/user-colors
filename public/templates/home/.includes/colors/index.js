"use strict";

/**
 *
 */
function index()
{
    const section = document.querySelector("#colors");
    const menu    = document.querySelector("#colors-context");
    const dialog  = document.querySelector("dialog:last-of-type");

    {
        const button = section.querySelector("[title='Add a new color']");

        button.addEventListener("click", () => dialog.show());
    }

    {
        const colors = section.querySelectorAll(".color");

        for ( const color of colors )
        {
            color.addEventListener("contextmenu", (e) => {
                e.preventDefault();

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