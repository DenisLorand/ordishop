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

    <form action="indexAdmin.php?action=createProduct" method='POST' enctype="multipart/form-data" class="formImg">

        <div class="form_article">
                <div class="article_title">
                    <label for="title">Nom du produit</label>
                    <input type="text" id="title" name="title" >
                </div>
                <div class="article_title">
                    <label for="brand">Marque du produit</label>
                    <input type="text" id="brand" name="brand" >
                </div>
                <div class="article_title">
                    <label for="model">Modèle du produit</label>
                    <input type="text" id="model" name="model" >
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

        <!-- <div class='article_title'>
            <label for="title"> Titre seo de votre image</label>
            <input type="text" id='title' name='title'>
        </div>

        <div class='article_title'>
            <input type="file" id='fileToUpload' name='fileToUpload' class="filesImg">
            <br><br>
        </div>

        <div class='img'>
            <br><br>
        </div>

        <div class='sub_btn'>
            <input type="submit" value="Envoyer" id='upload' name='submit' class="submit">
        </div> -->

    </form>
</section>


<?php $content = ob_get_clean(); ?> <!--Fonction PHP pour injecter le Template-->
<?php require 'templates/template.php' ; ?>