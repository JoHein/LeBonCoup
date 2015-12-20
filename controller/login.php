<?php

include("../model/geekBazar.php");  

if(empty($_POST['email']) || empty($_POST['password']))
{
	echo "Email ou password manquant";
}
else{
$email=$_POST['email'];
$password=$_POST['password'];
}
if($geek->checkUser($email,$password)) {
	$_SESSION['Logger']=$geek->getAdherent($email);
	$_SESSION['connected']="connected";
}
else {
	echo 'Compte non reconnu.';
}

header("Location:../index.php");

?>

	

