<?php     session_start();
 if(!isset($_SESSION['connected']))
        $_SESSION['connected']=false;
 ?>

<!DOCTYPE html>

<html lang="fr">

	<head>
	    <title>Geek Bazar, matériel informatique d'occasion</title>
	    <meta charset="utf-8"/>
	    <link rel="stylesheet" type="text/css" href="geekBazar.css">
	</head>
 


<body>
	
    <!------------------>
    <!-- EN TETE      -->
    <!------------------>
   
	<div id="connexion">

<?php
include("logName2.php");
	?>

	</div>
	
	
	<header>
	<img id="logo" src="GeekBazar.png" alt="logo GeekBazar" title="BazarGeek informatique d'occasion"/>
	</header>

    <!------------------>
    <!-- MENU         -->
    <!------------------>
    
	<nav>
		<ul>
			<li><a href="../index.php">Accueil</a></li><!--
			--><li><a href="hard-disk.php">Disques Durs</a></li><!--
			--><li><a href="cpu.php">Processeur</a></li><!--
			--><li><a href="gpu.php">Cartes Graphiques</a></li><!--
			--><li><a href="contact.php">Contact</a></li><!--
			<?php ?>
			--><?php if($_SESSION['connected']=="connected"){
			echo '<li><a href="hubAnnonce.php">Créer une Annonce</a></li>';
}
?>
		</ul>
	</nav>
	
	<main>
		<div id="hubAnnonce">
			<h1 id="choixAnnonce">Quel type d'annonce voulez-vous créer ? </h1>
			
			<a href="cpuForm.php" class="choixAnnonce"><p class="choixAnnonce">Processeur</p></a>
			<a href="cpuForm.php" class="choixAnnonce"><p class="choixAnnonce">Carte Graphique</p></a>
			<a href="cpuForm.php" class="choixAnnonce"><p class="choixAnnonce">Disque Dur</p></a>
		</div>
	</main>
	
	<?php include_once "footer.inc"; ?>
	
</body>
</html>