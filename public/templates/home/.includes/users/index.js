"use strict";

/**
 *
 */
function index()
{
    const dialog = document.querySelector("dialog:first-of-type");
    const button = document.querySelector("button[title~='user']");

    button.addEventListener("click", () => dialog.show());
}

export { index };