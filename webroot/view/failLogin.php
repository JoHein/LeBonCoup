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
		<form method="POST" action="../controller/login.php">
			
    		<label for="mail">e-mail :</label>
    		<input type="email" id="email" name="email"/>
    		
    		<label for="motdepasse">mot de passe</label>
    		<input type="password" id="motdepasse" name="password"/>
    		
    		<input type="submit" value="se connecter"/>
		</form>
	</div>
	
	
	<header>
	<img id="logo" src="GeekBazar.png" alt="logo GeekBazar" title="BazarGeek informatique d'occasion"/>
	</header>

    <!------------------>
    <!-- MENU         -->
    <!------------------>
    
	<nav>
		<ul>
			<li><a href="../index.html">Accueil</a></li><!--
			--><li><a href="hard-disk.php">Disques Durs</a></li><!--
			--><li><a href="cpu.php">Processeur</a></li><!--
			--><li><a href="gpu.php">Cartes Graphiques</a></li><!--
			--><li><a href="contact.php">Contact</a></li><!--
			--><li><a href="cpuForm.php">cpuForm</a></li>
		</ul>
	</nav>

    <!------------------>
    <!-- CONTENU      -->
    <!------------------>
    
	<main>
		<img src="view/img/carte_mere.jpeg" width="100%" alt="carte mère"/>
		
		<aside>
			
		</aside><!--

		
		INSCRIPTION
		
		-->
		<h1>ERREUR!</h1>
		
	</main>

    <!------------------>
    <!-- PIED DE PAGE -->
    <!------------------>
    
    <footer>
        <p>Projet DUT AS - 2015 - Heinen / Oliveri / Peyrard</p>
    </footer>

</body>
</html>