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
	<h1> Cartes graphiques d'occasion</h1>
	<section id="recherche">
		<form method="GET" action="">
			<legend>Affinez votre recherche :</legend>

			<label for="prix">Prix :</label>
			<input type="text" id="prix" name="price"/>

			<label for="marque">Marque :</label>
			<select id="marque" name="brand">
				<option value="lenovo">Lenovo</option>
			</select><br/>
			
			<label for="capacite">Capacité :</label>
			<input type="text" id="capacite" name="capacity"/>

			<label for="chipset">Chipset :</label>
			<select id="chipset" name="chipset">
				<option value="Intel">Intel</option>
			</select>

			<input type="submit" value="filtrer"/>
		</form>
	</section>


<!-- LISTE D'ANNONCE -->

	<section id="annonces">
		
		<!-- UNE ANNONCE -->
		<img src="img/carte_graphique.png" width="220px" height="150px"/><!--
		--><div class="produit">
			<h2>GPU Nvidia GTX 820 M</h2>
			<h3>publiée par Luca, le 08/07/2015</h3>
			<div class="description">
				Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500. 
			</div>

			<div class="prix">400 €</div>
		</div>
		
	</section>
</main>

<?php include_once "footer.inc"; ?>

</body>
</html>
