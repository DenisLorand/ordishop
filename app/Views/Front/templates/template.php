<?php 
/* récupération de l'adresse de page passée dans l'url*/
$path= 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$current= basename($path);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OrdiShop informatique, ordinateurs reconditionnés</title>
	<meta name="description" content="PC de bureau et ordinateurs portables reconditionnés garantis ">
	<meta name="robots" content="index,follow,all" />
	<!--Feuilles de styles-->
	<link rel="stylesheet" href="app/public/Front/css/style.css">
	<!--Google Fonts Open Sans-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<!--Librairie d'icones Fontawesome-->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<!--Scripts CDN jQuery et jQuery UI non compressés-->
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
	</script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous">
	</script>


</head>


<body>

	<header>

		<!--Menu de navigation-->
		<nav>

			<!--Icone menu Hamburger : au clic déroule les liens du menu en colonne, pour les écrans < 769px, grâce au script en JS du fichier burger.js-->
			<div id="burger"> <i class="fa fa-bars"></i></div>
			<!--Icone burger de Fontawesome-->

			<ul>

				<!--Instruction PHP echo 'on' permet d'indiquer sur quelle page on est, en modifiant la couleur du lien actif du menu-->
				<li><a href="index.php" class="<?php if($current =='index.php') {echo 'on';}?>">ACCUEIL</a></li>
				<li><a href="index.php?action=produits" class="<?php if($current =='index.php?action=produits') {echo 'on';}?>">PRODUITS</a></li>
				<li><a href="index.php?action=contact" class="<?php if($current =='index.php?action=contact') {echo 'on';}?>">CONTACT</a></li>
				<li><a href="indexAdmin.php" class="<?php if($current =='index.php?action=connexion') {echo 'on';}?>">CONNEXION</a></li>

			</ul>

		</nav>

	</header>

	<main>
		<!--Contenu principal de la page-->
		<?= $content?>
		<!--Fin de page-->
	</main>


	<footer>
		<ul>
			<li>
				<h3>Tous droits réservés 2021 &copy; Ordi Shop - Vannes</h3>
			</li>
			<li><a href="index.php?action=mentions-legales">Mentions Légales</a></li>
			<li><a href="index.php?action=rgpd"> RGPD</a></li>
			<li><a href="uml.html" target="_blank"> UML</a></li>
		</ul>
	</footer>


</body>

</html>