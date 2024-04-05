"use strict";

/**
 *
 */
function index()
{
    const dialog = document.querySelector("dialog:first-of-type");
    const button = dialog.querySelector("header button");

    button.addEventListener("click", () => dialog.close());
}

export { index };