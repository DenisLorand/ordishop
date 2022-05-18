<?php ob_start(); ?>

   <section>

      <h1>Mentions légales</h1>

      <div class='legal'>SITE INTERNET
         <h3>CREATION</h3>
         <p>Design : OrdiShop <br>
            Développement : Denis Lorand. Site développé sur une architecture MVC en langage PHP avec composer et base de données MySQL</p>
      </div>

      <div class='legal'>HERBERGEMENT
         <h3>O2SWITCH</h3>
         <p>Siret : 510 909 807 00024 <br>
         RCS Clermont Ferrand <br>
         SARL au capital de 100 000 €uros <br>
         Tél : 04 44 44 60 40
         </p>
      </div>

      <div class='legal'>SOCIETE
         <h3>ORDISHOP</h3>
         <p>Siret : XXX XXX XXX XXXXX <br>
         Gérant : Denis Lorand, Autoenrepreneur <br>
         56000 Vannes<br>
         Tél : 02 97 97 97 97
         </p>
      </div>

   </section>
   
   <!--JavaScript menu burger-->
	
	<script src="app/public/Front/js/burger.js"></script>


<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>