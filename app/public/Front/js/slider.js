// Slider en JavaScript

/*  Déclaration de variale par let privilégiée, puis attribution de sa valeur.
 "La syntaxe de déclaration des variables avec let correspond à la nouvelle syntaxe. La syntaxe avec var est l’ancienne syntaxe qui est vouée à disparaitre.
 Vous devriez donc aujourd’hui toujours utiliser le mot clef let pour déclarer vos variables" (src: Pierre Giraud https://www.pierre-giraud.com/javascript-apprendre-coder-cours/presentation-variable/)
 "En JavaScript, la déclaration d'une variable se limite au mot clé let, suivi du nom de variable choisi.
 Bien qu'il y ait une différence subtile entre les deux (que nous détaillerons dans le chapitre sur la portée), pour l'instant vous pouvez simplement voir var  comme l'ancienne version de let :"
 (src:  Openclassrooms https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript/6278392-declarez-des-variables-et-modifiez-leurs-valeurs)
*/

// On déclare les 2 variables globales slide et numero en leur attribuant leur valeur respective
// On insère les 5 images du slider dans un tableau (array)

let slide = new Array("app/public/Front/images/slide1.jpg", "app/public/Front/images/slide2.jpg", "app/public/Front/images/slide3.jpg", "app/public/Front/images/slide4.jpg", "app/public/Front/images/slide5.jpg");
let numero = 0;

// On définit notre fonction qui utilise les variables globales

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
