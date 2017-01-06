function menu() {
    $('.nav-toggle').click(function () {
        if ($('#background').hasClass("background")) {
            $('#background').removeClass("background");
            $('#background').addClass("no-background")
            $('#base').removeClass('itens-com-background');
            
        } else {
            $('#background').removeClass("no-background");
            $('#background').addClass("background");
            $('#base').addClass('itens-com-background');
        }
        if ($(".nav").hasClass("side-fechado")) {
            $('.nav').animate({
                left: "0px",
            }, 100, function () {
                $(".nav").removeClass("side-fechado");
                
            });
        } else {
            $('.nav').animate({
                left: "-295px",
            }, 100, function () {
                $(".nav").addClass("side-fechado");
            });
        }
    });
}



$(document).ready(function () {
    var tamanhoJanela = $(window).width();
    $(".nav-toggle").remove();

    if (tamanhoJanela < 1367) {
        $('.nav').css('left', '-295px').addClass('side-fechado');
        $('.nav').append("<div class='nav-toggle'><span class='glyphicon glyphicon-th-list'></span></div>");
    } else {
        $('.nav').css('left', '0px').addClass('side-fechado');
    }

    menu();
});