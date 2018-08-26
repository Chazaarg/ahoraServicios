$(document).ready(function(){
   

    $("li").mouseenter(function(event){
        $(event.target).addClass("active");
    });
    $("li").mouseleave(function(event){
        $(event.target).removeClass("active");
    });
});
