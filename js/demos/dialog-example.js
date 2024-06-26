'use strict';

/*******************************************************************************
 * dialog-example.js - An example of an accessible dialog.
 *
 * Written by Zoltan Hawryluk <zoltan.dulac@gmail.com>
 * Part of the Enable accessible component library.
 * Version 1.0 released Dec 28, 2021
 *
 * More information about this script available at:
 * http://www.useragentman.com/enable/dialog.php
 *
 * Released under the MIT License.
 ******************************************************************************/

import showcode from '../enable-libs/showcode.js';
import enableDialog from '../modules/enable-dialog.js';

// Button that opens the dialog
const updateButton = document.getElementById('updateDetails');

// Clicking this button opens the dialog
updateButton.addEventListener('click', function () {
    favDialog.showModal();
});

// The modal's cancel button
const cancelButton = document.getElementById('cancel');

// Clicking the cancel button will close the dialog
cancelButton.addEventListener('click', function () {
    favDialog.close();
});

// The <dialog> element itself
const favDialog = document.getElementById('favDialog');

enableDialog.init();

// expose this function to showcode if it is on the page
showcode.addJsObj('enableDialog', enableDialog);
