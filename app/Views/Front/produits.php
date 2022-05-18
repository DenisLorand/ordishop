<?php ob_start(); ?>

    
        <section class="produits">
            <!--Boucle foreach pour afficher chaque fiche produit simple de la table pc-->
            <?php foreach($lesProduits as $produit){; ?>
            
            <article class="produit">
            
                    <div class="card_mail">
                        <h3><?= htmlspecialchars($produit['title']) ;?></h3>
                    </div>

                    <div class="card_mail">
                        <h3> <?= htmlspecialchars($produit['brand']) ;?></h3>
                    </div>

                    <div class="image_produit" >
                        <img src="app/public/Front/images/<?= htmlspecialchars($produit['img']) ;?>" />
                    </div>
                    
                    <div class="card_mail">
                        <h3><?= ($produit ['price']) ?> €</h3>
                    </div>

                    <div class='fiche_produit'>
                    <h3><a class="" href="index.php?action=product&id=<?= $produit['id'] ?>">Fiche produit</a></h3> 
                    </div>
                    
            </article>
            <?php } ?>  
            
        </section>
        
        <!--Pagination avec la fonction nbPage() de ProductManager dans Models-->
        <p id='numberPages'>Pages : <?php for($i = 1; $i <= $numPage; $i++){
                    echo "<a href=\"index.php?action=produits&page=$i\">$i </a>";
                
                }?>
        </p>
        
    <!--JavaScript pour menu burger -->

     <script src="app/public/Front/js/burger.js"></script>
        

    
<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>