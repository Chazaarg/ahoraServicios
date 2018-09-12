//========================= Generación de rutas =========================//

import Routing from '../../vendor/friendsofsymfony/jsrouting-bundle/Resources/public/js/router'
import Routes from './js_routes.json'
Routing.setRoutingData(Routes);

// Generando la url para HomeController, donde se envía la locación.

let url = Routing.generate("home_index");

$(document).ready(function(){

    $('.actual-location').find('p').click(function(){
        $('.map-container').show();
    })

    //Cuando se ingresa el formulario de locación

    var $locationForm = $('#location-form');
    var $addressInput = $('#address-input');
    var $zonaInput = $('onchange');

    $locationForm.on('submit', function(){
        //Guarda la zona
        localStorage.setItem('zonaIngresada', $zonaInput.find('option:selected').text());
        //Guarda la dirección
        var direccionIngresada = $addressInput.val();
        localStorage.setItem('direccionIngresada', direccionIngresada);

        

        


    });

    //Envía la zona y dirección a PHP y responde insertando en el DOM la locación
    console.log (url);

    $.ajax({
        url: url,
        type: 'POST',
        dataType: "JSON",
        data: {
            'zonaIngresada': localStorage.getItem('zonaIngresada'),
            'direccionIngresada': localStorage.getItem('direccionIngresada')
        },
        success: function (data)
                {
                    $('#zona').html(data.zona),
                    $('#direccion').html(data.direccion),
                    $('.actual-location').show();

                }
        });

})