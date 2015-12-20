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
    
    <!-- GOOGLE MAP -->
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44994.31637229335!2d5.71554245!3d45.18416555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478af48bd689be6f%3A0x618c10cd6e995398!2sGrenoble!5e0!3m2!1sfr!2sfr!4v1431444293871" 
        width="100%" height="300" frameborder="0" style="border:0">
    </iframe>
    
    <div id="adresse">
        <p>Geek Bazar<br/>
           7, rue Adrien Ricard<br/>
           38 000 GRENOBLE<br/></p>
    </div>
    
    <aside id="formContact">
        <form>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom"/><br/>
            
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom"/><br/>
            
            <label for="email">Adresse mail :</label>
            <input type="email" id="email" name="email"/><br/>
            
            <label for="sujet">Sujet :</label>
            <input type="text" id="sujet" name="sujet"/><br/>
            
            <label for="message">Votre message :</label>
            <textarea id="message" name="message" rows="20" cols="30">
                votre texte ici
            </textarea> 
            
        </form>
    </aside>
</main>

    <?php include_once "footer.inc"; ?>

</body>
</html>