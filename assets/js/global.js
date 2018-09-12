$(document).ready(function(){ 

    $("li").mouseenter(function(event){
        $(event.target).addClass("active");
    });
    $("li").mouseleave(function(event){
        $(event.target).removeClass("active");
    });
});


/*
    $.getJSON('https://maps.googleapis.com/maps/api/geocode/json?address=miguel+de+salcedo+,1485,Morón',
    function(data) {
        console.log(data);
    //data is the JSON string

});

*/
/*
        let xhr = new XMLHttpRequest();
        let data = localStorage.getItem('zonaIngresada');
        // third argument specifies if it's an async request or a sync
        xhr.addEventListener('load', function ()
        {
            if (this.readyState === 4 ) {
                if (this.status === 200) {
                    resolve(JSON.parse(this.response))
                    console.log(this.response);
                } else {
                    reject(this.status)
                    console.log(this.response);
                }
            }
        })
        xhr.open("POST", url);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest')

        xhr.send(data);


*/