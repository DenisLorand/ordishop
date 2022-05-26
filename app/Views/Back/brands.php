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

<section>

    <h2>Liste des marques</h2>

    <section id="marques">
      
      <figure>
         
        <!--Au survol, l'image s'oppacifie, grâce à l'effet de la fonction jQuery; voire script survol.js-->
        <img class="survol" src="images/apple_logo.jpg" alt="logo apple">
        <img class="survol" src="images/dell_logo.jpg" alt="logo dell">
        <img class="survol" src="images/lenovo_logo.jpg" alt="logo lenovo">
        <img class="survol" src="images/hp_logo.jpg" alt="logo hp">
        <img class="survol" src="images/asus_logo.jpg" alt="logo asus">
        <h4>Nous vous proposons uniquement des marques réputées d'ordinateurs</h4> 
      </figure>

    </section>

    <div class="createPresta">
                <p><a class="createPresta" href="indexAdmin.php?action=newBrand">Ajouter une marque</a></p>
    </div>

    <div class="all-articles">
            <!--Boucle foreach pour récupérer les marques avec leur logo respectif de la table brands en BDD, et les afficher côté back-->
            <?php foreach($allBrands as $brand){; ?>

                <div class="article">
                    <div>
                        <h3> <?= ($brand['brandname']) ;?></h3>
                    </div>

                    <div class="card_img">
                        <img class="card_img" src="app/public/Back/images/<?= ($brand['brandimage']) ;?>" alt="brand" />
                    </div>

                    <div class="btn_gestion">
                        <p><a class="btn_delet" href="indexAdmin.php?action=deleteBrand&id=<?= $brand['id'] ?>">Supprimer cette marque</a></p>
                    </div>
                </div>

            <?php } ?>   
    </div>


</section>

<?php $content = ob_get_clean(); ?> <!--Fonction PHP pour injecter le Template-->
<?php require 'templates/template.php' ; ?>