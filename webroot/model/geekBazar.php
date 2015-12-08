<?php
    $geek = new geekBazarDAO();

    if(!isset($_SESSION['connected'])){
        $_SESSION['connected']=false;
        session_start();
    }

    ////////////////////////////////////////////////////////////////////////////
    // INTERNAUTE
    ////////////////////////////////////////////////////////////////////////////
    
    class Internaute{

        function consulterAnnonce(){
            
        }
        
        function rechercherAnnonce(){
            
        }
    }
    
    
    ////////////////////////////////////////////////////////////////////////////
    // ADHERENT
    ////////////////////////////////////////////////////////////////////////////
    class Adherent extends Internaute{
        
        public $cle;
        public $nom;
        public $prenom;
        public $telephone;
        public $email;
        public $password;
        public $premium;
        public $actif;
        
        function __construct($nm, $pn, $tel, $email, $pass, $pre, $act){
            $this->cle = 0;
            $this->setNom($nm);
            $this->setPrenom($pn);
            $this->setTel($tel);
            $this->setMail($email);
            $this->setPassword($pass);
            $this->setPremium($pre);
            $this->setActif($act);
        }
        
        // SETTERS //
        
        function setPrenom($pr){
            $this->prenom = $pr;
        }
        
        function setNom($n){
            $this->nom = $n;
        }
        
        function setTel($tel){
            $this->telephone = $tel;
        }
        
        function setMail($m){
            $this->email=$m;
        }
        
        function setPassword($pass){
            $this->password=$pass;
        }
        
        function setPremium($prem){
            $this->premium = $prem;
        }
        
        function setActif($act){
            $this->actif = $act;
        }
        
        /******************************************************************/

        
        // GETTERS //

        function getPrenom(){
            return $this->prenom;
        }
        
        function getNom(){
            return $this->nom;
        }
        
        function getTel(){
            return $this->telephone;
        }
        
        function getMail(){
            return $this->email;
        }
        
        function getPassword(){
            return $this->password;
        }
        
        function getPremium(){
            return $this->premium;
        }
        
        function getActif(){
            return $this->actif;
        }
        
        /******************************************************************/
        
                // METHODES //
        
        function modifierCompte(){
            
        }
        
        function supprimerCompte(){
            
        }
        
        function creerAnnonce(){

        }
        
        function modifierAnnonce(){
            
        }
        
        function supprimerAnnonce(){
            
        }
        
        function commenter(){
            
        }
        
        function supprimerCommentaire(){
            
        }
        
        function seDeconnecter(){
            
        }
    }
    
    
    ////////////////////////////////////////////////////////////////////////////
    // VISITEUR
    ////////////////////////////////////////////////////////////////////////////
    class Visiteur extends Internaute{
        
        function __construct(){
        }
        
        function creerCompte(){
            
        }
        
        function seLoguer(){
            
        }
        
        function accederBackOffice(){
            
        }
    }
    
    
    ////////////////////////////////////////////////////////////////////////////
    // ANNONCE
    ////////////////////////////////////////////////////////////////////////////
    
    class Annonce{
        public $reference;
        public $titre;
        public $prix;
        public $image;
        public $region;
        public $description;
        public $etat;
        public $email;
      

        function __construct($ref, $tit, $pri, $ima, $reg, $des, $et, $ma){
            $this->setReference($ref);
            $this->setTitre($tit);
            $this->setPrix($pri);
            $this->setImage($ima);
            $this->setDescription($des);
            $this->setRegion($reg);
            $this->setEtat($et);
            $this->setMail($ma);
        }
        
        // SETTERS //
        
        function setReference($ref){
            $this->reference = $ref;
        }
        
        function setTitre($tit){
            $this->titre = $tit;
        }
        
        function setPrix($pri){
            $this->prix = $pri;
        }
        
        function setImage($im){
            $this->image = $im;
        }
        
        function setRegion($reg){
            $this->region = $reg;
        }

        function setDescription($des){
            $this->description= $des;
        }
        
        function setEtat($et){
            $this->etat= $et;
        }
        
        function setMail($ma){
            $this->email = $ma;
        }
        /*************************************************************************/
        
        // GETTERS //
        
        function getReference(){
            return $this->reference;
        }
        
        function getTitre(){
            return $this->titre;
        }
        
        function getPrix(){
            return $this->prix;
        }
        
        function getImage(){
            return $this->image;
        }
        
        function getRegion(){
            return $this->region;
        }
        
        function getDescription(){
            return $this->description;
        }
        
        function getEtat(){
            return $this->etat;
        }
        
        function getMail(){
            return $this->email;
        }
        
        /*************************************************************************/
    }
    
    
    ////////////////////////////////////////////////////////////////////////////
    // ANNONCE DISQUE DUR
    ////////////////////////////////////////////////////////////////////////////
    
    class AnnDD extends Annonce{
        public $capacite;
        public $toursmin;
        public $format;
        public $interface;
        
        function __construct($ref, $tit, $pri, $ima, $reg, $des, $et, $cap, $tou, $for, $int){
            parent::__construct($ref, $tit, $pri, $ima, $reg, $des, $et); // CONSTRUCTEUR D'ANNONCE
            $this->setCapacite($cap);
            $this->setTours($tou);
            $this->setFormat($for);
            $this->setInterface($int);
        }
        
        // SETTERS //
        
        function setCapacite($cap){
            $this->capacite = $cap;
        }
        
        function setTours($tou){
            $this->toursmin = $tou;
        }
        
        function setFormat($for){
            $this->format = $for;
        }
        
        function setInterface($int){
            $this->interface = $int;
        }
    }
    
    
    ////////////////////////////////////////////////////////////////////////////
    // ANNONCE PROCESSEUR
    ////////////////////////////////////////////////////////////////////////////
    
    class AnnCPU extends Annonce{
        public $frequence;
        public $support;
        

        
        function __construct($ref, $tit, $pri, $ima, $reg, $des, $et, $ma, $fre, $sup){
            parent::__construct($ref, $tit, $pri, $ima, $reg, $des, $et, $ma); // CONSTRUCTEUR D'ANNONCE
            $this->setFrequence($fre);
            $this->setSupport($sup);
        }
        

        // SETTERS //
        
        function setFrequence($fre){
            $this->frequence = $fre;
        }

        function setSupport($sup){
            $this->support = $sup;
        }

    }
    
    
    ////////////////////////////////////////////////////////////////////////////
    // ANNONCE CARTE GRAPHIQUE
    ////////////////////////////////////////////////////////////////////////////
    
    class AnnGPU extends Annonce{
        public $capacite;
        public $toursmin;
        public $format;
        public $interface;
        
        function __construct($ref, $tit, $pri, $ima, $reg, $des, $et, $cap, $tou, $for, $int){
            parent::__construct($ref, $tit, $pri, $ima, $reg, $des, $et); // CONSTRUCTEUR D'ANNONCE
            $this->setCapacite($cap);
            $this->setTours($tou);
            $this->setFormat($for);
            $this->setInterface($int);
        }
        
        // SETTERS //
        
        function setCapacite($cap){
            $this->capacite = $cap;
        }
        
        function setTours($tou){
            $this->toursmin = $tou;
        }
        
        function setFormat($for){
            $this->format = $for;
        }
        
        function setInterface($int){
            $this->interface = $int;
        }
    }
    
    
    ////////////////////////////////////////////////////////////////////////////
    // BASE DE DONNNEES
    ////////////////////////////////////////////////////////////////////////////
    
    class geekBazarDAO{
        public $bd;
        public $database = 'sqlite:F:\Logiciel\wamp\wamp\www\leboncoup\webroot\model\geekBazar.db'; // Chemin vers notre BDD

        function __construct() 
        {
            try {
                $this->bd = new PDO($this->database);
                $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                if (!$this->bd) 
                {
                    die ("Database error");
                }
             }
            catch (PDOException $e)
             {
                die("PDO Error :".$e->getMessage()." $this->database\n");
            }
        }
        
        
        
     
        ////////////////////////////
        function getAdherent($email) {
            // REQUETE
            $email = "SELECT * FROM users_ WHERE email='$email'";
            
            // CONNEXION
            try {
                $r = $this->bd->query($email);
                $result = $r->fetch(PDO::FETCH_ASSOC);
                
                $adh= new Adherent($result['nom'], $result['prenom'], $result['telephone'], $result['email'], $result['password'], $result['premium'], $result['actif']);
            } catch (PDOException $e) {
                die("PDO Error :".$e->getMessage());
            }
            
            // TRAITEMENT
            if ($adh == null) {
                die("Il n'y a aucun utilisateur correspondant à l'email : '$email'");
            }
            
            return $adh;
        }
        
        
        
        
        ////////////////////////////
        function getAnnonceCPU($id) {
            // REQUETE
            $reference = "SELECT * FROM annCPU_ WHERE reference=$id"; ///////////// NOM DE TABLE A CHANGER

            try {
                $r = $this->bd->query($reference);
                $result = $r->fetch(PDO::FETCH_ASSOC);

                $annonce= new AnnCPU($result['reference'], $result['titre'], $result['prix'], $result['image'], $result['description'], $result['region'], $result['etat'],$result['email'], $result['frequence'], $result['support']);


            } catch (PDOException $e) {
                die("PDO Error :".$e->getMessage());
            }
            
            // TRAITEMENT
            if ($annonce == null) {
                die("Aucune annonce ne correspond à la référence : '$reference'");
            }
            return $annonce;
        }
        
        
        
        
        
        
        ////////////////////////////
        function existAdherent($nom) {
            // REQUETE
            $q = "SELECT nom FROM users_ WHERE nom='$nom'";
            
            // CONNEXION
            try {
                $r = $this->bd->query($q);
                $res = $r->fetchAll(PDO::FETCH_CLASS,'Adherent');
            } catch (PDOException $e) {
                die("PDO Error :".$e->getMessage());
            }
            
            // TRAITEMENT
            if (sizeof($res)==0) {
                return false;
            }
            return true;
        }
        
        
        
        
        ////////////////////////////
        function existAnnonceCPU($ref) {
            // REQUETE
            $q = "SELECT reference FROM annCPU_ WHERE reference='$ref'";
            
            // CONNEXION
            try {
                $r = $this->bd->query($q);
                $res = $r->fetchAll(PDO::FETCH_CLASS,'AnnCPU');
            } catch (PDOException $e) {
                die("PDO Error :".$e->getMessage());
            }
            
            // TRAITEMENT
            if (sizeof($res)==0) {
                return false;
            }
            return true;
        }
        
        
        
        
        
        ////////////////////////////
        function updateUser(Adherent $u) {
            // REQUETE
            $q = "UPDATE users_ SET prenom='$u->prenom', nom='$u->nom', telephone='$u->telephone', email='$u->newemail', password='$u->password', premium='$u->premium', actif='$u->actif' WHERE nom='$u->email'";
            
            // CONNEXION
            try {
                $r = $this->bd->exec($q);
            } catch (PDOException $e) {
                die("PDO Error :".$e->getMessage());
            }

        }
        
         function updateCle(Adherent $u) {
            // REQUETE
            $cle= mt_rand();
            $q = "UPDATE users_ SET cle=:$cle WHERE email= '$u->email' ";
            
            // CONNEXION
            try {
                $r = $this->bd->exec($q);
            } catch (PDOException $e) {
                die("PDO Error :".$e->getMessage());
            }

            return $cle;

        }
        
        
        ////////////////////////////
        function deleteAnnonceCPU($ref) {
            // REQUETE
            $q = "DELETE FROM annCPU_ WHERE reference = '$ref'";
            
            // CONNEXION
            try {
                $res = $this->bd->exec($q);
            } catch (PDOException $e) {
                die("PDO Error :".$e->getMessage());
            }
            
            // TRAITEMENT
            if ($res != 1) {
                print("\n</br>Erreur : ");
                var_dump($this->bd->errorInfo());
                print("</br>\n");
                die ("incorrect nb '$res' of delete from annonce_ for '$ref'</br>\n");
            }
        }
        
        
        
        ////////////////////////////
        function ajouterAdherent(Adherent $u) {
         
            // REQUETE   
            $q= "INSERT INTO users_(nom,prenom,telephone,email,password) 
            VALUES('$u->nom','$u->prenom','$u->telephone','$u->email','$u->password')";
         
         
            // CONNEXION
            try {
                $res = $this->bd->exec($q);

            } catch (PDOException $e) {
                die("PDO Error :".$e->getMessage());
            }
            
            
            // TRAITEMENT
            if ($res != 1) {
                print("\n</br>Erreur : ");
                var_dump($this->bd->errorInfo());
                print("</br>\n");
                die ("incorrect nb '$res' of insert into from annonce_ for '$ref'</br>\n");
            }
        }
        
        
        ////////////////////////////
       //checkUser
        function checkUser($email,$password) {
         
            // REQUETE   
            $q= "SELECT email, password FROM users_ WHERE email = '$email' and password = '$password'"; 
           
            try {
                $r= $this->bd->query($q);
                $res= $r->fetchAll(PDO::FETCH_ASSOC);

            } catch (PDOException $e) {
                die("PDO Error :".$e->getMessage());
            }
            
            if (sizeof($res)==0) {
                return false;

            }
                return true;
        }
        
        
        
        
        
        ////////////////////////////
        function ajouterAnnonce(Annonce $a) {
            
            // REQUETE
            $q = "INSERT INTO annCPU_(reference, titre, prix, image, description, region, etat, email, frequence, support) VALUES
                                    ('$a->reference', '$a->titre','$a->prix', '$a->image', '$a->description', '$a->region', '$a->etat', '$a->email', '$a->frequence', '$a->support')";
            
            // CONNEXION                        
            try {
                $res = $this->bd->exec($q);
            } catch (PDOException $e) {
                die("PDO Error :".$e->getMessage());
            }
            
            // TRAITEMENT
            if ($res != 1) {
                print("\n</br>Erreur : ");
                var_dump($this->bd->errorInfo());
                print("</br>\n");
                die ("incorrect nb '$res' of insert into from annonce_ for '$ref'</br>\n");
            }
        }
        
        
        ////////////////////////////

    function incrAnnonceCPU(){
        $q="SELECT COUNT(*) FROM annCPU_";
        
        try {
                $r = $this->bd->query($q);
                $res= $r->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
                die("PDO Error :".$e->getMessage());
        }
        
        $href= $res[0]['COUNT(*)']+1; 
        return $href;
    }
    
    function rechercheCPU($a){
        
        if(gettype($a)==reference){}
        
        $q="SELECT * FROM annCPU_ WHERE $id=$a";
    }

    }
    
?>