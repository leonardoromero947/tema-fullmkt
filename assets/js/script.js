var preloader = document.getElementById('loader');
$(document).ready(function() {
    if(!($('body').hasClass('home'))) {
        $("#sticky-header").addClass('mkt_main_menu2');
    }
    $(".bubble").hide();
});

function preLoaderHandler() {
    preloader.style.display = 'none';
}
setTimeout(function() {
    $('#loader').hide()
}, 0);
$.getJSON(json, function(json) {
    //Lenguaje por defecto de la página sessionStorage.setItem("lang", "idioma")"
    if (!localStorage.getItem("lang")) {
        localStorage.setItem("lang", "es");
    }
    var lang = localStorage.getItem("lang");

    var doc = json;
    $('.lang').each(function(index, element) {
        $(this).text(doc[lang][$(this).attr('key')]);
    }); //Each

    $('.translate').click(function() {
        localStorage.setItem("lang", $(this).attr('id'));
        var lang = $(this).attr('id');
        var doc = json;
      /*  if (lang == 'es') {
            document.getElementById('mapa_servicios').src = imgEsp;
        } else {
            document.getElementById('mapa_servicios').src = imgEng;
        }*/
        $('.lang').each(function(index, element) {
            $(this).text(doc[lang][$(this).attr('key')]);
        }); //Each
    }); //Funcion click
}); //Get json AJAX