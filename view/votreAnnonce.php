<?php    
    		include("../model/geekBazar.php");

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
		
	<?php 
		$ann = $geek->getAnnonceCPU($_GET['ref']);
		$adh = $geek->getAdherent($ann->email);
	 ?>
	<section class="annonces">
		
	<p>
		<?php echo "$ann->reference"; ?>
	</p>	
	
	<?php 
		if($_SESSION['connected']=="connected"){
			 $tel=$adh->telephone;
			 $mail=$adh->email;
		}
	?>
	<img src= "<?php echo "$ann->image"; ?>" width="220px" height="150px" />

		<div class="produit">
			
		<h2> <?php echo "$ann->titre";
		 ?> </h2>
		<h3>publiée par <?php
		                        echo "$adh->prenom";
	                	?> 
		, le 02/07/2015</h3>
		
		<div class="description">
				<?php   echo "$ann->description  ";
						echo "$ann->frequence  ";
						echo "$ann->support  ";
				        echo "$ann->region  ";
				   if($_SESSION['connected']=="connected"){     
				        echo "tel: $tel  ";
				        echo"mail : $mail  ";
}
				?>
		</div>

		<div class="prix"><?php echo "$ann->prix"; ?> €</div>
	</div>
		
</section>
	
	
</main>

<?php include_once "footer.inc"; ?>

</body>
</html>
