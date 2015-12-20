<?php

// chargement du MODELE
      include('../model/geekBazar.php');
// insertion dans la table users_
    $adherent = new Adherent("$_POST[nom]","$_POST[prenom]","$_POST[telephone]","$_POST[email]","$_POST[password]", false, false);
    $u=$geek->ajouterAdherent($adherent);


    
// paramètrage pour envoi du mail   
    $email=$_POST['email'];

        
    $from='From:johei1337@gmail.com';
    
    $cle = $geek->updateCle($adherent);
        
    $sujet="Activez votre compte GeekBazar";
    
        
    $message= "Bienvenue sur GeekBazar,
    
    Pour activer votre compte cliquez sur le lien ci-dessous :
    http://www-etu-info.iut2.upmf-grenoble.fr/~heinenj/GeekBazar/controller/validation.php?email=$email&cle=$cle
    
    Ceci est un mail automatique, ne pas répondre.";
    
// envoi du mail
    mail($email, $sujet , $message, $from);
header("Location:../view/successInscrit.php");
  //  include_once("register.php");
?>



    
