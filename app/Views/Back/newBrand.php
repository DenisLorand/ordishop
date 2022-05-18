<?php ob_start(); ?>

<section>
    <h2>Ajouter une marque</h2>

    <form action="indexAdmin.php?action=createBrand" method='POST'>

        <div class="form_article">
                <div class="article_title">
                    <label for="brandname">Nom de la marque</label>
                    <input type="text" id="brandname" name="brandname" >
                </div>
                
                <div class="subBtn">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Ajouter la marque</button>
                </div>
        </div>

    </form>

    <h4 class="btn_admin"><a href="indexAdmin.php?action=brands">Retour Gestion des marques</a></h4>

</section>


<?php $content = ob_get_clean(); ?> <!--Fonction PHP pour injecter le Template-->
<?php require 'templates/template.php' ; ?>