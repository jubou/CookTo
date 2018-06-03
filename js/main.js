$(document).ready(Inicio);

function Inicio() {

    // MENÚ LATERAL

    $(window).scroll(function () {
        if ($(this).scrollTop() >
            200) {
            $('#menu-lateral a').fadeIn(200);
        } else {
            $('#menu-lateral a').fadeOut(200);
        }
    });

    //  EVENTOS

    // HEADER

    $("header#header nav#navegacion div.navbar-nav div a").mouseenter(AparecerIcono);
    $("header#header nav#navegacion div.navbar-nav div a").mouseleave(DesaparecerIcono);

}

function AparecerIcono() {

    $(this).children().eq(0).css("visibility", "hidden");
    $(this).children().eq(1).css("display", "block").animate({
        "opacity": "1"
    });

}

function DesaparecerIcono() {

    $(this).children().eq(0).css("visibility", "visible");
    $(this).children().eq(1).css({
        "opacity": "0",
        "display": "none"
    });

}