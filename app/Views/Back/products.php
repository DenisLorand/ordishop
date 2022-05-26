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
    <!--Liste des produits sous forme de fiche détaillée. L'admin peut ajouter un  nouveau produit, le mettre à jour (éditer) ou supprimer-->
    <h2>Liste des produits</h2>
    <div class="createPresta">
        <h4><a class="createPresta" href="indexAdmin.php?action=newProduct">Ajouter un nouveau produit</a></h4>
    </div>
    
    <div class="all-articles">
            <?php foreach($allProducts as $product){; ?>

                <div class="article">
                    <div>
                        <h3> <?= ($product['title']) ;?></h3>
                    </div>

                    <div>
                        <h3> <?= ($product['brand']) ;?></h3>
                    </div>
                    
                    <div class="card_img">
                        <p><img class="card_img" src="app/public/Back/images/  <?= ($product['img']) ;?> " alt=""/></p>
                    </div>

                    <div class="card_mail">
                        <p>Type : <?= ($product['model']) ;?></p>
                    </div>

                    <div class="card_mail">
                        <p>Processeur : <?= ($product['processor']) ;?></p>
                    </div>

                    <div class="card_mail">
                        <p>RAM : <?= ($product['ram']) ;?> Go</p>
                    </div>

                    <div class="card_mail">
                        <p>Disque Dur : <?= ($product['hd']) ;?> Go</p>
                    </div>

                    <div>
                        <h3> <?= ($product['price']) ;?> €</h3>
                    </div>

                    <!--Suppression d'un produit par la méthode deleteProduct-->
                    <div class="btn_gestion">
                        <p><a class="btn_delet" href="indexAdmin.php?action=deleteProduct&id=<?= $product['id'] ?>">Supprimer ce produit</a></p>
                    </div>
                    
                    <!--Edition et mise à jour du produit par les méthodes editProdut et updateProduct-->
                    <div class="btn_gestion">
                        <p><a class="btn_edit" href="indexAdmin.php?action=editProduct&id=<?= $product['id'] ?>">Mettre à jour ce produit</a></p>
                    </div>

                </div>
                

            <?php } ?>
           
    </div>
        
</section>

<?php $content = ob_get_clean(); ?> <!--Fonction PHP pour injecter le Template-->
<?php require 'templates/template.php' ; ?>