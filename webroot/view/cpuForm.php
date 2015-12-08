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
	      <link rel="stylesheet" href="../jquery/jquery-ui.css">

	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
			
 	<main id="CPUform">
			
 		<h1>Annonce pour un CPU</h1>	
 			
 			<form method="POST" action="../controller/newAnnonce.php" enctype="multipart/form-data">
 				<fieldset>
					
						
				<label for="mail">E-mail : </label>
				<input type="email" id="email" name="email"/><br/>
					
      			  <label for="region">Region :</label>
      			   <select name="region" id="region">
				      <option>Rhone-Alpes</option>
				      <option>Alsace</option>
				      <option>Corse</option>
				      <option>PACA</option>
				    </select>

	 			<p>
				  <label for="power">Puissance CPU :</label>
				  <input type="text" id="power" name="frequence" readonly style="border:0; color:#f6931f; font-weight:bold;">
				</p>
				<div id="slider-range-min"></div>

				<p>
					
				    <label for="socket">Selection socket :</label>
				    <select name="support" id="socket">
				      <option>Intel 1150</option>
				      <option>Intel 1155</option>
				      <option>AMD FM1</option>
				      <option>AMD FM2</option>
				    </select>
					
				</p>

				<p>			
				    <label for="etat">Selection etat :</label>
				    <select name="etat" id="etat">
				      <option>Mauvais</option>
				      <option selected="selected">Moyen</option>
				      <option>Bon</option>
				      <option>Neuf</option>
				    </select>				
				</p>

				<p>
				  <label for="spinner">Prix en € :</label>
				  <input id="spinner" name="prix" value="5">
				</p>

				<p>
				  <label >Titre :</label>
				  <input type="text" id="titre" name="titre">
				</p>
				
				<p>
				<label>Description :<label>
				<textarea id="description" name="description" width="100px;" placeholder="Ajouter vos commentaires" rows="10"></textarea>
				</p>
   

				<label>Select image to upload :<label> 
				    <input type="file" name="image" id="fileToUpload">
			
			<input type="submit" value="Valider">
			</fieldset>
			</form>

	</main>
	
			<?php 
				include("../controller/scriptCPU.php");
				include("footer.inc");
			?>




 
</body>
</html>



  


