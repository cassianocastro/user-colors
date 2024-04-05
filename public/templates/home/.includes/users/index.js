"use strict";

/**
 *
 */
function index()
{
    const dialog = document.querySelector("dialog");
    const button = document.querySelector("button[title~='user']");

    button.addEventListener("click", () => dialog.show());
}

export { index };