<?php

// intégration du MODELE
include_once "../model/geekBazar.php";

// récupération des donnnées après clic du lien du mail
$email = $_GET['email'];
$cle = $_GET['cle'];

// vérification clé du mail et clé BDD


    // CONNEXION
    $req = "SELECT cle,actif FROM users_ WHERE email='$email'";
    $r = $geek->db->query($req);
    $res = $r->fetchAll(PDO::FETCH_ASSOC);
    
    
    // TRAITEMENT
    if ($res[0]['actif'] == true) {
        include_once "../view/registerAlready.php";  // compte DEJA activé !
    } else {
        
        if ($res[0]['cle'] == $cle) {
            include_once "../view/registerValidated.php"; // compte bien validé
        } else {
            include_once "../view/registerProblem.php"; // problème dans la validation 
        }
    }