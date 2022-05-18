<?php ob_start(); ?>

    <section id="rgpd">

        <h2>1. Collecte de l’information</h2>
            <p>Nous recueillons des informations lorsque vous vous inscrivez sur notre site, lorsque vous vous connectez à votre compte, faites un achat, participez à un concours, et / ou lorsque vous vous déconnectez. Les informations recueillies incluent votre nom, votre adresse e-mail, numéro de téléphone, et / ou carte de crédit.<br>
                En outre, nous recevons et enregistrons automatiquement des informations à partir de votre ordinateur et navigateur, y compris votre adresse IP, vos logiciels et votre matériel, et la page que vous demandez.
            </p>
        <h2>2. Utilisation des informations</h2>
            <p>Toutes les informations que nous recueillons auprès de vous peuvent être utilisées pour :<br>
                - Personnaliser votre expérience et répondre à vos besoins individuels<br>
                - Fournir un contenu publicitaire personnalisé<br>
                - Améliorer notre site<br>
                - Améliorer le service client et vos besoins de prise en charge<br>
                - Vous contacter par e-mail<br>
                - Administrer un concours, une promotion, ou une enquête<br>
            </p>
        <h2>3. Confidentialité du commerce en ligne</h2>
            <p>Nous sommes les seuls propriétaires des informations recueillies sur ce site. Vos informations personnelles ne seront pas vendues, échangées, transférées, ou données à une autre société pour n’importe quelle raison, sans votre consentement, en dehors de ce qui est nécessaire pour répondre à une demande et / ou une transaction, comme par exemple pour expédier une commande.
            </p>
        <h2>4. Divulgation à des tiers</h2>
            <p>Nous ne vendons, n’échangeons et ne transférons pas vos informations personnelles identifiables à des tiers. Cela ne comprend pas les tierce parties de confiance qui nous aident à exploiter notre site Web ou à mener nos affaires, tant que ces parties conviennent de garder ces informations confidentielles.<br>
            Nous pensons qu’il est nécessaire de partager des informations afin d’enquêter, de prévenir ou de prendre des mesures concernant des activités illégales, fraudes présumées, situations impliquant des menaces potentielles à la sécurité physique de toute personne, violations de nos conditions d’utilisation, ou quand la loi nous y contraint.<br>
            Les informations non-privées, cependant, peuvent être fournies à d’autres parties pour le marketing, la publicité, ou d’autres utilisations.
            </p>
        <h2>5. Protection des informations</h2>
            <p>Nous mettons en œuvre une variété de mesures de sécurité pour préserver la sécurité de vos informations personnelles. Nous utilisons un cryptage à la pointe de la technologie pour protéger les informations sensibles transmises en ligne. Nous protégeons également vos informations hors ligne. Seuls les employés qui ont besoin d’effectuer un travail spécifique (par exemple, la facturation ou le service à la clientèle) ont accès aux informations personnelles identifiables. Les ordinateurs et serveurs utilisés pour stocker des informations personnelles identifiables sont conservés dans un environnement sécurisé.<br>
            
        <h2>6. Se désabonner</h2>
            <p>Nous utilisons l’adresse e-mail que vous fournissez pour vous envoyer des informations et mises à jour relatives à votre commande, des nouvelles de l’entreprise de façon occasionnelle, des informations sur des produits liés, etc. Si à n’importe quel moment vous souhaitez vous désinscrire et ne plus recevoir d’e-mails, des instructions de désabonnement détaillées sont incluses en bas de chaque e-mail.
            </p>
        <h2>7. Utilisation des cookies ou traceurs</h2>
            <p>Nos cookies améliorent l’accès à notre site et identifient les visiteurs réguliers. En outre, nos cookies améliorent l’expérience d’utilisateur grâce au suivi et au ciblage de ses intérêts. Cependant, cette utilisation des cookies n’est en aucune façon liée à des informations personnelles identifiables sur notre site.<br>
               Que sont les cookies ou traceurs ?<br>
               Les cookies HTTP, les cookies « flash », le résultat du calcul d’une empreinte unique du terminal dans le cas du « fingerprinting » (calcul d'un identifiant unique du terminal basée sur des éléments de sa configuration à des fins de traçage),les pixels invisibles ou « web bugs », les cookies et plug-in de réseaux sociaux (boutons sociaux).<br>
               Tout autre identifiant généré par un logiciel ou un système d'exploitation (numéro de série, adresse MAC, identifiant unique de terminal (IDFV), ou tout ensemble de données qui servent à calculer une empreinte unique du terminal (par exemple via une méthode de « fingerprinting »).<br>
               Ils peuvent être déposés et/ou lus, par exemple lors de la consultation d'un site web, d’une application mobile, ou encore de l'installation ou de l'utilisation d'un logiciel et ce, quel que soit le type de terminal utilisé : ordinateur, smartphone, tablette numérique ou console de jeux vidéo connectée à internet.<br>
               Vous disposez de différent moyens pour gérer les cookies, notamment en paramétrant votre navigateur internet (Chrome, Edge, Firefox, Opera, Safari...).<br>
               Plus d'information : consultez le site de la<a href="http://www.cnil.fr/vos-droits/vos-traces/les-cookies/" target="_blank"> <strong>CNIL</strong></a></p>
        <h2>8. Consentement</h2>
            <p>En utilisant notre site, vous consentez à notre politique de confidentialité.</p>

    </section>
	
	<!--JavaScript menu burger-->
	
	<script src="app/public/Front/js/burger.js"></script>

<?php $content = ob_get_clean(); ?> <!--Fonction PHP pour injecter le Template-->
<?php require 'templates/template.php' ; ?>