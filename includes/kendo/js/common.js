$(function () {
    var width = $(window).width(), height = $(window).height();
    if ((width <= 480)) {
       //Lo que no se debe cargar en el móvil
    } else {
       
        $('.carousel').carousel({
            interval: 10000
        });
    }

   
});