<?php ob_start(); ?>

<?php
  // On initialise la session d'identification administration
  session_start();
  // On vérifie si l'administrateur est connecté, sinon on le redirige vers la page de connexion
  if(!isset($_SESSION["mail"]) && !isset ($_SESSION["pass"])){
    header("Location: indexAdmin.php");
    exit(); 
  }
?>

<h2>Créer une image</h2>

<section id="newImage">
    
    <form action="indexAdmin.php?action=createImage" method='POST' enctype="multipart/form-data" class="formImg">

        <div class="newImg">
            <h4><label for="title"> Titre seo de votre image</label></h4>
            <input type="text" id='title' name='title'>
        </div>
        
        <div class="newImg">
            <input type="file" id='fileToUpload' name='fileToUpload' class="filesImg">  
        </div>

        <div class='newImg'>
            <input type="submit" value="Envoyer" id='upload' name='submit' class="submit">
        </div> 

    </form>

</section>

<h4 class="btn_admin"><a href="indexAdmin.php?action=images">Retour Gestion des images</a></h4>

<?php $content = ob_get_clean(); ?> <!--Fonction PHP pour injecter le Template-->
<?php require 'templates/template.php' ; ?>