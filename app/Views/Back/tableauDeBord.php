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

<h1>Tableau de bord : bienvenue <?=  $_SESSION['firstname'] ?> !</h1>

<section class='card_gestion'>
    
    <div class='card'>
        <p><i class="fas fa-shopping-basket"></i></p>
        <h3>Mes produits</h3>
        <p><a href="indexAdmin.php?action=products">Gérer mes produits</a></p>
    </div>
     
     <div class='card'>
         <p><i class="fas fa-copyright"></i></p>
        <h3>Mes marques</h3>
        <p><a href="indexAdmin.php?action=brands">Gérer mes marques</a></p>
    </div> 
   
</section>
	
<section class='card_gestion'>
	
	<div class='card'>
        <p><i class="fas fa-envelope"></i></p>
        <h3>Mes mails</h3>
        <p><a href="indexAdmin.php?action=mails">Gérer mes mails</a></p>
    </div>

    <div class='card'>
        <p><i class="fas fa-image"></i></p>
        <h3>Mes images</h3>
        <p><a href="indexAdmin.php?action=images">Gérer mes images</a></p>
    </div>

</section>


<?php $content = ob_get_clean(); ?> <!--Fonction PHP pour injecter le Template-->
<?php require 'templates/template.php' ; ?>