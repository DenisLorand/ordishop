// Evènement en JavaScript : addEventListener et manipulation du DOM

// Dans le formulaire de contact

/* Champs du haut : Nom, Prénom, Email et Téléphone
 * La couleur de fond du champ Nom s'affiche en bleu ciel au survol (mouseover) du pointeur 
 * Puis, la couleur de fond du champ se réinitialise au départ (mouseout) du pointeur 
*/

let name = document.getElementById('lastname');
	name.addEventListener('mouseover', function(event){
	event.target.style.backgroundColor = 'rgb(77, 177, 243)';
});
	name.addEventListener('mouseout', function(event){
	event.target.style.backgroundColor = '';
});

let firstname = document.getElementById('firstname');
	firstname.addEventListener('mouseover', function(event){
	event.target.style.backgroundColor = 'rgb(77, 177, 243)';
});
	firstname.addEventListener('mouseout', function(event){
	event.target.style.backgroundColor = '';
});

let mail = document.getElementById('mail');
	mail.addEventListener('mouseover', function(event){
	event.target.style.backgroundColor = 'rgb(77, 177, 243)';
});
	mail.addEventListener('mouseout', function(event){
	event.target.style.backgroundColor = '';
});

let phone = document.getElementById('phone');
	phone.addEventListener('mouseover', function(event){
	event.target.style.backgroundColor = 'rgb(77, 177, 243)';
});
	phone.addEventListener('mouseout', function(event){
	event.target.style.backgroundColor = '';
});

/* Champs du bas : Code Postal, Ville, Adresse, Sujet et Message
 * La couleur de fond du champ  s'affiche en orange au survol (mouseover) du pointeur 
 * Puis on réinitialise la couleur de fond après quelques instants (setTimeout) : ici 2000 = 2 secondes
*/

let cp = document.getElementById("cp");
 	cp.addEventListener("mouseover", function( event ) {
    event.target.style.backgroundColor = "orange";
    setTimeout(function() {
     event.target.style.backgroundColor = "";
  }, 2000);
 }, false);

let ville = document.getElementById("ville");
 	ville.addEventListener("mouseover", function( event ) {
	event.target.style.backgroundColor = "orange";
	setTimeout(function() {
 	event.target.style.backgroundColor = "";
	}, 2000);
}, false);

let adresse = document.getElementById("adresse");
 	adresse.addEventListener("mouseover", function( event ) {
    event.target.style.backgroundColor = "orange";
    setTimeout(function() {
     event.target.style.backgroundColor = "";
  }, 2000);
 }, false);

let sujet = document.getElementById("sujet",);
 	sujet.addEventListener("mouseover", function( event ) {
    event.target.style.backgroundColor = "orange";
    setTimeout(function() {
     event.target.style.backgroundColor = "";
  }, 2000);
 }, false);

 let message = document.getElementById("content");
 	message.addEventListener("mouseover", function( event ) {
    event.target.style.backgroundColor = "orange";
    setTimeout(function() {
     event.target.style.backgroundColor = "";
  }, 2000);
 }, false);

 /* Fonction de validation du format de l'adresse mail */
 var email = document.getElementById("mail");

 email.addEventListener("keyup", function (event) {
 if(email.validity.typeMismatch) {
    email.setCustomValidity("Veuillez rentrer un format d'adresse email valide svp !");
 } else {
    email.setCustomValidity("");   }
 });

/* Fonction JavaScript qui active (enables, car disabled = false) le bouton_envoi (submit) du formulaire,
 * lorsque l'on a coché la case checkbox des termes et conditions.
*/

 function terms_changed(){
	 document.getElementById("bouton_envoi").disabled = false;
 }
