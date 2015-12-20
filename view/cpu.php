<?php  

 session_start();
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

<!-- RECHERCHE PAR FILTRES -->

<main>
	<h1> Processeurs d'occasion</h1>
	<section id="recherche">
		<form method="GET" action="">
			<legend>Affinez votre recherche :</legend>

			<label for="prix">Prix :</label>
			<input type="text" id="prix" name="price"/>

			<label for="marque">Marque :</label>
			<select id="marque" name="brand">
				<option value="lenovo">Lenovo</option>
			</select><br/>
			
			<label for="frequence">Fréquence :</label>
			<input type="text" id="frequence" name="frequency"/>

			<label for="modele">Modèle :</label>
			<select id="modele" name="model">
				<option value="Intel">Intel</option>
			</select>

			<label for="support">Support :</label>
			<select id="support" name="support">
				<option value="Intel">Intel</option>
			</select>

			<input type="submit" value="filtrer"/>
		</form>
	</section>

<!-- LISTE D'ANNONCE -->

	<section class="annonces">
		
	<?php include("../controller/afficheAnnonces.php"); ?>
	
</main>

<?php include_once "footer.inc"; ?>

</body>
</html>
