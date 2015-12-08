<?php


if($_SESSION['connected']=="connected"){
	
	echo "Bonjour";
	echo '<a id="deco" href="../controller/logout.php"><p>Deco</p></a>';

}else{

	?>
		<form method="POST" action="../controller/login.php">
			
     		<label for="email">e-mail :</label>
    		<input type="email" id="email" name="email"/>
    		
    		<label for="password">mot de passe</label>
    		<input type="password" id="motdepasse" name="password"/>
    		
    		<input type="submit" value="se connecter"/>
		</form>
	
	<?php
}
	?>

