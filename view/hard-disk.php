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
<!-- RECHERCHE PAR FILTRES -->

<main>
	<h1> Disques durs externes d'occasion</h1>
	<section id="recherche">
		<form method="GET" action="">
			<legend>Affinez votre recherche :</legend>

			<label for="prix">Prix :</label>
			<input type="text" id="prix" name="price"/>

			<label for="marque">Marque :</label>
			<select id="marque" name="brand">
				<option value="lenovo">Lenovo</option>
			</select>

			<label for="capacite">Capacité :</label>
			<input type="text" id="capacite" name="capacity"/><br/>

			<label for="tours">Tours/minute :</label>
			<select id="tours" name="speed">
				<option value="5400">5 400 t/m</option>
			</select>

			<label for="interface">Interface :</label>
			<select id="interface" name="inter">
				<option value="SATA">SATA</option>
			</select>

			<label for="format">Format :</label>
			<select id="format" name="format">
				<option value="2,5">2"5</option>
			</select>

			<input type="submit" value="filtrer"/>
		</form>
	</section>


<!-- LISTE D'ANNONCE -->

	<section id="annonces">
		
		<!-- UNE ANNONCE -->
		<img src="img/disque_dur.jpg" width="220px" height="150px"/><!--
		--><div class="produit">
			<h2>Disque dur 2"5</h2>
			<h3>publiée par Jocelin, le 12/05/2015</h3>
			<div class="description">
				Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500. 
			</div>

			<div class="prix">25 €</div>
		</div>
		
	</section>
	
</main>

<?php include_once "footer.inc"; ?>

</body>
</html>
