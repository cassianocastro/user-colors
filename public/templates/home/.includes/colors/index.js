"use strict";

/**
 *
 */
function index()
{
    const dialog = document.querySelector("dialog:last-of-type");
    const button = document.querySelector("button[title~='color']");

    button.addEventListener("click", () => dialog.show());
}

export { index };