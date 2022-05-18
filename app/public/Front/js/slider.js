// Slider en JavaScript

// On insère les 5 images du slider dans un tableau (array)
var slide = new Array("app/public/Front/images/slide1.jpg", "app/public/Front/images/slide2.jpg", "app/public/Front/images/slide3.jpg", "app/public/Front/images/slide4.jpg", "app/public/Front/images/slide5.jpg");
var numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = slide[numero];
}
// autoplay
setInterval("ChangeSlide(1)", 5000); // Intervalle de 5000ms / 5 secondes avant le démarrage automatique du slider
