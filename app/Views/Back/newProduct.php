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
    <h2>Ajouter un produit </h2>

    <form action="indexAdmin.php?action=createProduct" method='POST' >

        <div class="form_article">

                <div class="article_title">
                    <label for="title">Nom du produit</label>
                    <input type="text" id="title" name="title" >
                </div>

                <div class="article_title">
                    <label for="brand">Marque du produit</label>
                    <select name="brand" id="brand">
                        <option value="APPLE">APPLE</option>
                        <option value="ASUS">ASUS</option>
                        <option value="DELL">DELL</option>
                        <option value="HP">HP</option>
                        <option value="LENOVO">LENOVO</option>
                    </select>
                </div>

                <div class="article_title">
                    <label for="img">Image du produit</label>
                    <select name="img" id="img">
                        <!--boucle foreach sur les images-->
                        <?php foreach($imageProducts as $imageProduct) {?> 

                        <option value="<?= $imageProduct['id'] ?>"><?= $imageProduct['title'] ?></option>
                        <?php }?>
                    </select>
                </div>

                <div class="article_title">
                    <label for="model">Modèle du produit</label>
                    <select name="model" id="model">
                        <option value="PC de bureau">PC de bureau</option>
                        <option value="Portable">Portable</option>
                    </select> 
                </div>

                <div class="article_title">
                    <label for="processor">Processor</label>
                    <input type="text" id="processor" name="processor" >
                </div>

                <div class="article_title">
                    <label for="ram">RAM</label>
                    <input type="text" id="ram" name="ram" >
                </div>

                <div class="article_title">
                    <label for="hd">Disque Dur</label>
                    <input type="text" id="hd" name="hd" >
                </div>
                
                <div class="article_title">
                    <label for="price">Prix du produit</label>
                    <input type="text" id="price" name="price" >
                </div>

                <div class="subBtn">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Ajouter</button>
                </div>

        </div>
 
    </form>
    <h4 class="btn_admin"><a href="indexAdmin.php?action=products">Retour Gestion de produits</a></h4>

   

</section>


<?php $content = ob_get_clean(); ?> <!--Fonction PHP pour injecter le Template-->
<?php require 'templates/template.php' ; ?>