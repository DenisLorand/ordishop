<?php ob_start(); ?>

<section>

    <div class="article_about">
        <h2>Liste des mails</h2>

        <div class="all-articles">
            <?php foreach($allMails as $allMail){; ?>

            <div class="mail"> <!--class article-->
                <div class="card_mail">
                    <p>Nouveau mail de :</p>
                </div>
                <div class="card_mail">
                    <h4><?= htmlspecialchars($allMail['civil']) ?> <?= htmlspecialchars($allMail['firstname']) ;?> <?= htmlspecialchars($allMail['lastname']) ?> </h4>
                </div>
                <div class="card_mail">
                    <h4>mail :</h4>
                    <p><?= htmlspecialchars($allMail['mail']) ?></p>
                </div>
                <div class="card_mail">
                    <h4>Tél :</h4>
                    <p><?= htmlspecialchars($allMail['phone']) ?></p>
                </div>
                <div class="card_mail">
                    <h4>Adresse :</h4>
                </div>
                <div class="card_mail">
                    <p><?= htmlspecialchars($allMail['adresse']) ?>, <?= htmlspecialchars($allMail['cp']) ?> <?= htmlspecialchars($allMail['ville']) ;?></p>
                </div>
                <div class="card_mail">
                    <h4>Sujet :</h4>
                    <p><?= htmlspecialchars($allMail['sujet']) ?></p>
                </div>
                <div class="card_mail">
                    <h4>Message :</h4>
                </div>
                <div class="card_mail" ><p><?= htmlspecialchars($allMail['content']) ?></p></div>
                
                
                <div class="btn_gestion">
                    <p><a class="btn_delet" href="indexAdmin.php?action=deleteMail&id=<?= $allMail['id'] ?>">Supprimer ce mail</a>
                </p></div>
                
            </div>
            <?php } ?>
        </div>
    </div>

</section>

<?php $content = ob_get_clean(); ?> <!--Fonction PHP pour injecter le Template-->
<?php require 'templates/template.php' ; ?>