require('bootstrap');
require('../css/app.css');
require('../css/global.scss');

require('./global.js');
const $ = require('jquery');




// or you can include specific pieces
// require('bootstrap/js/dist/tooltip');
// require('bootstrap/js/dist/popover');

$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});