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
   
    <div style="width:100%;max-width:100%;overflow:hidden;height:300px;color:red;">
    <div id="embedded-map-canvas" style="height:100%; width:100%;max-width:100%;">
    <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Sophia+Antipolis,+Alpes-Maritimes,+France&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU">
    </iframe></div><a class="google-map-enabler" rel="nofollow" href="https://www.treat-lice.com" id="make-map-data">nits removal</a><style>#embedded-map-canvas img{max-width:none!important;background:none!important;}</style>
</div>
    
    <div id="adresse">
        <p>LeBonCoup<br/>
           Route des Colles,<br/>
           06410 Biot Sophia Antipolis<br/></p>
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