/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (index.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.css');

// app.js

const $ = require('jquery');
// JS is equivalent to the normal "bootstrap" package
// no need to set this to a variable, just require it
require('bootstrap');

// or you can include specific pieces
// require('bootstrap/js/dist/tooltip');
// require('bootstrap/js/dist/popover');

$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});