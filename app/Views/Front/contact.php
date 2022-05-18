<?php ob_start(); ?>

<h1>Contactez-nous</h1>

<section class="form_contact">
    
    <p>Les champs sur fond jaune sont obligatoires</p>

    <form id="formulaire" action="index.php?action=contactMail" method="post">

        <fieldset>
            <legend><h4>Vos coordonnées</h4></legend>
            <p>Civilité</p><p>  
            <input type="radio" id="monsieur" name="civil" value="Monsieur" > <label  for="monsieur">Monsieur</label>
            <input type="radio" id="madame" name="civil" value="Madame"> <label  for="madame">Madame</label>
            <input type="radio" id="mademoiselle" name="civil" value="Mademoiselle"> <label  for="mademoiselle">Mademoiselle</label>
</p>
            <!--'built-in form validator' required pour spécifier que tel champ doit être obligatoirement rempli pour valider l'envoi du formulaire-->
            <p><label for="lastname">Nom</label></p>
            <input type="text" id="lastname" name="lastname" placeholder="Votre Nom" required >

            <p><label for="firstname">Prénom</label></p>
            <input type="text" id="firstname" name="firstname" placeholder="Votre Prénom" required>

            <p><label for="mail">Email</label></p>
            <input type="email" id="mail" name="mail" placeholder="Votre Email" required>

            <!--'build-in form validator' pattern pour spécifier par une expression régulière le chemin que les donnéees saisies doivent suivre.
            Ici seuls les chiffres de 0 à 9, et un nombre de 10 chiffres sont valides-->
            <p><label for="phone">Téléphone</label></p>
            <input type="tel" pattern="[0-9]{10}" id="phone" name="phone" placeholder="Votre Téléphone">
        </fieldset>

        <fieldset>
            <legend><h4>Votre adresse</h4></legend>
            <p><label for="cp">Code Postal </label></p>
            <input name="cp" id="cp" type="text" placeholder="CP">

            <p><label for="ville">Ville </label></p>
            <input name="ville" id="ville" type="text" placeholder="Ville">

            <p><label for="adresse">Adresse </label></p>
            <input name="adresse" id="adresse" type="text" placeholder="Adresse">
        </fieldset>
        
        <fieldset>
            <legend><h4>Votre message</h4></legend>
            <p><label for="sujet">Sujet</label></p>
            <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message" required>

            <p><label for="content">Message</label></p>
            <textarea id="content" name="content" placeholder="Votre message" rows="5" cols="30" required></textarea>

        </fieldset>
        
            <h4><label for="terms_and_conditions">J'accepte les termes et conditions de votre politique de confidentialité <a href="index.php?action=rgpd" target="_blank"> RGPD</a></label>
            <input type="checkbox" id="terms_and_conditions" value="1" onclick="terms_changed()" required /></h4>
        
            <!--Boutton submit mis en disabled par défaut. Puis enabled après avoir coché la checkbox d'acceptation de notre politique de confidentialité-->
            <p><input type="submit" value="Envoyer" id='bouton_envoi' disabled /></p> 

    </form>

</section>


<!--Scripts JavaScript-->
<script src="app/public/Front/js/burger.js"></script>
<script src="app/public/Front/js/form.js"></script> <!--Manipulation du DOM du formulaire-->
<script src="app/public/Front/js/geoapi.js"></script> <!--Suggestion de remplissage des champs Code Postal, Ville et et Adresse avec autocomplete de jQuery-->


<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>