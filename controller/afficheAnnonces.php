<?php
    include("../model/geekBazar.php");
    
    $var = $geek->incrAnnonceCPU();
    $var = $var - 1 ;

    for($i=1; $i <= $var; $i+=1){
        $ann = $geek->getAnnonceCPU($i);
    	$adh = $geek->getAdherent($ann->email);

        include("../view/listeAnnonce.php");
    }
?>