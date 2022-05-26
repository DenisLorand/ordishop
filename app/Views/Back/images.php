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

<article class="createPresta">
    <h4><a class="createPresta" href="indexAdmin.php?action=image">Ajouter une image de présentation</a></h4>
</article>

<aside id='images'>

    <div class='images'>

    <?php foreach($allImages as $image){ ?>
        <figure>
            <figcaption><?= $image['title']; ?></figcaption>
            <img src="app/public/Back/images/<?= $image['img']; ?>" alt="<?= $image['title'] ?>">
            <div class="btn_gestion">
                <a class="btn_delet" href="indexAdmin.php?action=deleteImage&id=<?= $image['id'] ?>">Supprimer cette image</a>  
            </div>
        </figure>

    <?php } ?>
    </div>

</aside>




<?php $content = ob_get_clean(); ?> <!--Fonction PHP pour injecter le Template-->
<?php require 'templates/template.php' ; ?>