$(document).ready(function(){
   

    $("li").mouseenter(function(event){
        $(event.target).addClass("active");
    });
    $("li").mouseleave(function(event){
        $(event.target).removeClass("active");
    });

    //Elegir locación
    $locationForm = $('#location-form');

        //Zona
   /* if (localStorage.getItem('zonaIngresada')) {

        $("#onchange option").eq(localStorage.getItem('zonaIngresada')).prop('selected', true);
    }*/

    $locationForm.on('submit', function(){
        localStorage.setItem('zonaIngresada', $('#onchange').val());
    });
/*
    $("#onchange").on('change', function() {
        localStorage.setItem('zonaIngresada', $('option:selected', this).index());
    });
    */

        //Dirección
    var $addressInput = $('#address-input'); 

    /*if(localStorage.getItem('direccionIngresada')){
        $addressInput.val(localStorage.getItem('direccionIngresada'));
    }*/

    $locationForm.on('submit', function(){
        var direccionIngresada = $addressInput.val();
        localStorage.setItem('direccionIngresada', direccionIngresada);
    });
    
    

    
/*
    $.getJSON('https://maps.googleapis.com/maps/api/geocode/json?address=miguel+de+salcedo+,1485,Morón',
    function(data) {
        console.log(data);
    //data is the JSON string

});

*/

    
});



