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

<?php $product = $getProduct->fetch();  ?>


<section>
    <div class='article_about'>
        <h2>Produit id n° <?= $product['id'] ?></h2>

        <form action="indexAdmin.php?action=updateProduct&id=<?= $product['id'] ?>" method="POST">

            <div class="form_article">
                <div class="article_title">
                    <label for="title">Nom du produit</label>
                    <input type="text" id="title" name="title" value="<?= $product['title'] ?>">
                </div>

                <div class="article_title">
                    <label for="brand">Marque du produit</label>
                    <!-- <input type="text" id="brand" name="brand" value="<?= $product['brand'] ?>"> -->
                    
                    <select name="brand" id="brand" >
                    <option value="APPLE">APPLE</option>
                    <option value="ASUS">ASUS</option>
                    <option value="DELL">DELL</option>
                    <option value="HP">HP</option>
                    <option value="LENOVO">LENOVO</option>
                    </select>
                </div>

                <div class="article_title">
                    <label for="model">Modèle du produit</label>
                    <!-- <input type="text" id="model" name="model" value="<?= $product['model'] ?>"> -->
                    <select name="model" id="model">
                    <option value="PC de bureau">PC de bureau</option>
                    <option value="Portable">Portable</option>
                    </select>
                </div>

                <div class="article_title">
                    <label for="processor">Type et vitesse du Processeur</label>
                    <input type="text" id="processor" name="processor" value="<?= $product['processor'] ?>">
                </div>

                <div class="article_title">
                    <label for="ram">Capacité RAM en Go</label>
                    <input type="text" id="ram" name="ram" value="<?= $product['ram'] ?>">
                </div>

                <div class="article_title">
                    <label for="hd">Capacité du Disque Dur en Go</label>
                    <input type="text" id="hd" name="hd" value="<?= $product['hd'] ?>">
                </div>
                <div class="article_title">
                    <label for="price">Prix en €uros du produit</label>
                    <input type="text" id="price" name="price" value="<?= $product['price'] ?>">
                </div>

                <div class="subBtn">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Editer</button>
                </div>
            </div>
        
            <h4 class="btn_admin"><a href="indexAdmin.php?action=products">Retour Gestion de produits</a></h4>

        </form>
    </div>
        
</section>

<?php $content = ob_get_clean(); ?> <!--Fonction PHP pour injecter le Template-->
<?php require 'templates/template.php' ; ?>