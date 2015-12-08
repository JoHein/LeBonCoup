<?php
    include("../view/listeAnnonce.php");
	$ref = $_GET['ref'];


   header("Location:../view/votreAnnonce.php?ref=$ref");
?>    