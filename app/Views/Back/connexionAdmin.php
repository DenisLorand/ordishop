<?php ob_start(); ?>

<section id="connexion">
    <h1>Connexion Administrateur</h1>
    
       
        <!--Formulaire de connexion admin--> 
        <form action="indexAdmin.php?action=connexionAdmin" method='post'>
            <table>
                <!-- <tr>
                    <td align='right'><label for='firstname'>Prénom</td>
                    <td><input type='text' placeholder ='Votre Prénom' name='firstname' id='firstname'></td>
                </tr> : Mettre en commentaires après avoir créé le(s) admin(s) avec action=createAdmin,
            puis renommer en action=connexionAdmin --> 
                <tr>
                    <td><label for='mail'>email : </label></td>
                </tr>
                <tr>
                    <td><input type='text' placeholder ='Votre email' name='mail' id='mail'></td>
                </tr>
                <tr>
                    <td ><label for='pass'>Mot de passe :</label></td>
                </tr>
                <tr>
                    <td><input type='password' placeholder ='Votre mot de passe' name='pass' id='pass'></td>
                </tr>
                <tr>
                    <td><input type='submit' value='Connexion' name='name'></td>
                </tr>
            </table>
        </form> 

</section>


<?php $content = ob_get_clean(); ?> <!--Fonction PHP pour injecter le Template-->
<?php require 'templates/template.php' ; ?>

    