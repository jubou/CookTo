$(document).ready(Inicio);

function Inicio() {

    // SCROLL TO TOP & MENU LATERAL

    $(window).scroll(function () {
        if ($(this).scrollTop() >
            200) {
            $('.go-top').fadeIn(200);
        } else {
            $('.go-top').fadeOut(200);
        }
    });

    // SUBIDA Y ANIMACIÓN SCROLL TO TOP

    $('.go-top').click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 600);
    })

    // MENÚ LATERAL

     $(window).scroll(function () {
         if ($(this).scrollTop() >
             200) {
             $('#menu-lateral a').fadeIn(200);
         } else {
             $('#menu-lateral a').fadeOut(200);
         }
     });

}