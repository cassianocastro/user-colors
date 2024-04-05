"use strict";

import { index as header } from "../.includes/header/index.js";
import { index as colors } from "./.includes/colors/index.js";
import { index as users } from "./.includes/users/index.js";
import { index as udialog } from "./.includes/users-dialog/index.js";
import { index as cdialog } from "./.includes/colors-dialog/index.js";
import { index as context } from "./.includes/context/index.js";

/**
 *
 */
function index()
{
    header();
    colors();
    users();
    udialog();
    cdialog();
    context();
}

index();