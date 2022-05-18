// Effets d'opacité sur images à l'aide de jQuery

$(document).ready(function(){
    $(".survol").mouseover(function(){
        $(this).css('opacity', '0.6'); // Au survol du pointeur l'image s'opacifie à 0.6
    });
    $(".survol").mouseout(function(){ // Au départ du pointeur l'image reprend sa transparence normale 1
        $(this).css('opacity', '1')
    });
    $(".detail").mouseover(function(){
        $(this).text("gjdgjmdfgllfdj")  
    });
});