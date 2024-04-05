"use strict";

import { index as header } from "../.includes/header/index.js";
import { index as users } from "./.includes/users/index.js";
import { index as udialog } from "./.includes/users-dialog/index.js";

/**
 *
 */
function index()
{
    header();
    users();
    udialog();
}

index();