<?php ob_start(); ?>

<div class="confirmMail">
    <h1>Votre mail a été envoyé avec succès</h1>
</div>

<?php $content = ob_get_clean(); ?> <!--fonction php pour injecter le template-->
<?php require 'templates/template.php'; ?>
