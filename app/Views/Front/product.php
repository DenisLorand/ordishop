<?php ob_start(); ?>


        <h3>Fiche détaillée de chaque produit :

         ID produit n° <?= $product['id'] ?></h3> 
       

    <div class="produits">

        <article class="produit">

            <div class="card_mail">
                <h3> <?= ($product['title']) ;?></h3>
            </div>

            <div class="card_mail">
                <h3> <?= ($product['brand']) ;?></h3>
            </div>

            <div class="image_produit">
            <div>
                <img  src="app/public/Front/images/<?= ($product['img']) ;?>" alt="produit"/>
            </div>
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

            <div class="card_mail">
                <h3><?= ($product ['price']) ?> €</h3>
            </div>

            <div class='fiche_produit'>
                <h3><a href="index.php?action=produits">Retour produits</a></h3>
            </div>
                
        </article>
        
        <div>
            <form id="form_comment" action="index.php?action=createComment&idPc=<?= $product['id'] ?>" method='POST'>

                    <label for="comment"></label>
                    <p>Emettez votre avis sur ce produit</p>
                    <input type="text" id="comment" name="comment" placeholder="Votre avis" >
                    
                    <label for="note"></label>
                    <p>Attribuez une note de 1 à 20</p>
                    <p><input type="number" id="note" name="note" min="1" max="20" /></p>
                    

                    <p><input type="submit" value="Envoyer"></p>

            </form>

            <div class="comment">
                <h3>Avis  & Notes des utilisateurs</h3>

                <?php foreach($allComments as $comment) {?>
                <?php if($comment['comment'] != null && $comment['note'] !=null){ ?>

                <p class="comment"><?= ($comment['comment']) ;?><br> Note : <?= ($comment['note']) ;?> / 20</p>
             
                <?php }?>
                <?php }?>
            </div>

            <div class="comment">
                <h3>Note moyenne</h3>

                <?php foreach($allNotes as $notes) {?>
                

                <p class="comment">Note moyenne : <?= ($notes['NoteMoyenne']) ;?> / 20</p>
             
               
                <!-- <?php var_dump($notes) ?>; -->
              <?php }?>
                
            </div> 

            
        </div>

                </div>
	
	<!--JavaScript menu burger-->
	
	<script src="app/public/Front/js/burger.js"></script>


<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>

