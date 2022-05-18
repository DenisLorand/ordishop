<?php ob_start(); ?>


  <section id="top">
    <h1>Bienvenue chez OrdiShop !</h1>

    <section id="titre">

      <figure id="logo"><a href="index.php" >
        <!-- <figcaption class="logo">ORDISHOP</figcaption> -->
        <img  src="images/logo_ordishop.png" alt="logo" ></a>
      </figure>

      <h2>Ordinateurs de bureau et portables reconditionnés</h2>

    </section>

    <aside class="trophee">

        <figure>
          <figcaption>ORDI DU MOIS <i class="fas fa-award"></i></figcaption>
          <!--Effet zoom de 150% sur image au survol du pointer avec la fonction transform et scale (1.5)-->      
          <img class="zoom" src="app/public/Front/images/asus_vivobook.jpg" alt="PC de bureau" title="Meilleure note moyenne obtenue par l'ensemble des utilisateurs , testeurs le mois dernier.">
        </figure>
          <h2>ASUS VIVOBOOK</h2>
        <div class="note">
          <h2><i class="fas fa-trophy"></i><br>
           17/20</h2>   
        </div> 
        
    </aside>

    <article id="garantie" >
      <img class="zoom" src="images/garantie.jpg" alt="garantie" title="Garantie extensible possible sur touts les éléments ou parties de l'appareil de 6 à 12 mois supplémentaires.">
      <h4>Tous nos ordinateurs de bureau et portables, vendus à prix réduits, sont entièrement vérifiés et remis à l'état neuf,
         reconditionnés et testés par nos propres techniciens. Nous vous offrons une garantie de 12 mois sur tous nos appareils,
         avec possibilité d'extension.
      </h4>
    </article>

  </section>

    <!--Slider de 5 images en défilement automatique pour écrans > 768px-->
    <div id="slider">
        <img id="slide" src="app/public/Front/images/slide1.jpg" alt="ordinateurs" >
        <!--<div id="precedent" onclick="ChangeSlide(-1)">&#9668;</div>
        <div id="suivant" onclick="ChangeSlide(1)">&#9658;</div>-->
    </div> 

    <section id="model">
  
      <figure class="model">
        <figcaption>PORTABLE</figcaption>
        <!--Au survol, l'image s'oppacifie, grâce à l'effet de la fonction jQuery; voire script survol.js-->
        <img class="survol" src="app/public/Front/images/portable.jpg" alt="portable">
        <h4>Quibus occurrere bene pertinax miles explicatis ordinibus parans hastisque feriens scuta qui habitus iram pugnantium concitat et dolorem proximos iam gestu terrebat sed eum in certamen alacriter consurgentem revocavere ductores rati intempestivum anceps subire certamen cum haut longe muri distarent, quorum tutela securitas poterat in solido locari cunctorum.</h4>
      </figure>
      <figure class="model">
        <figcaption>PC DE BUREAU</figcaption>
        <img class="survol" src="app/public/Front/images/pcbureau.jpg" alt="PC de bureau">
        <h4>Abusus enim multitudine hominum, quam tranquillis in rebus diutius rexit, ex agrestibus habitaculis urbes construxit multis opibus firmas et viribus, quarum ad praesens pleraeque licet Graecis nominibus appellentur, quae isdem ad arbitrium inposita sunt conditoris, primigenia tamen nomina non amittunt, quae eis Assyria lingua institutores veteres indiderunt.</h4>
      </figure>
  
    </section>

    <section id="marques">

        <h3>Nous vous proposons uniquement des marques réputées d'ordinateurs</h3>
      
      <figure>     
        <!--Au survol, l'image s'oppacifie, grâce à l'effet de la fonction jQuery; voire script survol.js-->
        <img class="survol" src="images/apple_logo.jpg" alt="logo apple">
        <img class="survol" src="images/dell_logo.jpg" alt="logo dell">
        <img class="survol" src="images/lenovo_logo.jpg" alt="logo lenovo">
        <img class="survol" src="images/hp_logo.jpg" alt="logo hp">
        <img class="survol" src="images/asus_logo.jpg" alt="logo asus">
      </figure>

    </section> 

  <!--images redimensionnées avec texte centrés au format SVG-->
  <svg height="100%" width="100%">
     <rect x="0" y="0" width="100%" height="70%" ></rect>
     <!--La fonction translate(X,Y) de la propriété transform permet de déplacer horizontalement et/ou déplacer verticalement un élément HTML par rapport à sa position d'origine;
       ici maintient les images centrées verticalement et horizontalement en étant responsive -->
     <!--Au survol, l'image s'oppacifie, grâce à l'effet de la fonction jQuery; voire script survol.js-->
     <image class="paiement"  xlink:href="app/public/Front/images/mastercard.svg"  transform="translate(-35.5,-31)" x="25%" y="50%" width="50%" height="25%"/>
     <image class="paiement"  xlink:href="app/public/Front/images/paypal.png"  transform="translate(-35.5,-31)" x="50%" y="50%" width="50%" height="25%"/>
     <image class="paiement"  xlink:href="app/public/Front/images/visa.svg"  transform="translate(-35.5,-31)" x="75%" y="50%" witdh="50%" height="25%"/>
     <text  x="50%" y="20%" alignment-baseline="middle" text-anchor="middle" >Nos méthodes de paiement en ligne</text>
  </svg>

  <!--Javascript avec addEventListener pour afficher la barre d'acceptation des cookies de la RGPD au 1er chargement de la page d'accueil / index-->
	<script src="app/public/Front/js/cookiechoices.js"></script>
  <script>document.addEventListener('DOMContentLoaded', function(event){cookieChoices.showCookieConsentBar('Ce site utilise des cookies pour garantir le bon fonctionnement de notre site Web, personnaliser votre expérience de navigation, analyser la manière dont vous utilisez notre site Web et vous proposer des publicités pertinentes. En poursuivant votre navigation, vous acceptez l\′utilisation des cookies.', 'J’accepte', 'En savoir plus', 'https://www.greta-bretagne-sud.fr/stagiaires/denis-lorand/index.php?action=rgpd');});</script>

	<!--Scripts JS pour menu burger, slider et images au survol-->
	<script src="app/public/Front/js/burger.js"></script>
	<script src="app/public/Front/js/slider.js"></script>
	<script src="app/public/Front/js/survol.js"></script>
	
<?php $content = ob_get_clean(); ?> <!--ob_get_clean : fonction PHP de bufferisation qui lit le contenu du tampon de sortie puis l'efface-->
<?php require 'templates/template.php'; ?>