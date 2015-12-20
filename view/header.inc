    <!------------------>
    <!-- EN TETE      -->
    <!------------------>
    <?php     session_start();
 if(!isset($_SESSION['connected']))
        $_SESSION['connected']=false;
 ?>

<?php
include("logName2.php");
	?>
       
	
	<header>
		<img id="logo" src="img/GeekBazar.png" alt="logo GeekBazar" title="BazarGeek informatique d'occasion"/>
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
			--><li><a href="contact.html">Contact</a></li>
		</ul>
	</nav>
