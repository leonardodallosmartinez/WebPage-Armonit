$(function(){
    $(".carousel").carousel({interval: 1500}); //tiempo transicion carousel.

    $(".carousel-caption").on({
        mouseenter: function(){
            $(".d-block").css("filter", "blur(0.5rem)");
        },
        mouseleave: function(){
            $(".d-block").css("filter", "blur(0)");
        }
        
    });

    console.log("ejecucion de JS 100%");
});       
