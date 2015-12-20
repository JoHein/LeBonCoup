<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Helper;
use Cake\Network\Session;

$cakeDescription = 'Leboncoup Echange d\'object entre gens bien!';

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('geekBazar.css') ?>

</head>
<body>
    
    <!------------------>
    <!-- EN TETE      -->
    <!------------------>
    
    <header>
    <img id="logo" src="view/GeekBazar.png" alt="logo Leboncoup" title="leboncoup informatique d'occasion"/>

    <div class="logForm">

    <?php
     if($this->request->session()->check('Auth.User.username')){
            echo "Bienvenu ".$this->request->session()->read('Auth.User.username')."!";
            ?>
            <a href="users/logout"><button>Logout</button>
    <?php
        }else{
            ?>
            <a href="users/login"><button>Login</button></a>
            <a href="users/add"><button>Register</button></a>
    <?php
        }
    	?>
</div>

    </header>

    <!------------------>
    <!-- MENU         -->
    <!------------------>


    <nav>
        <ul>
            <li><a>Accueil</a></li><!--
            --><li><a href="annonces">Annonces</a></li><!--
            --><li><a href="users/contact">Contact</a></li><!--
            <?php ?>
            --><?php if($this->request->session()->check('Auth.User.username')){
            echo '<li><a href="annonces/add">Créer une Annonce</a></li>';
            echo '<li><a href="users/compte">Mon compte</a></li>';

            }
            ?>
        </ul>
    </nav>

    <!------------------>
    <!-- CONTENU      -->
    <!------------------>
    
    <main>

        <section class="blockContentCust">    

        <aside>


            <h1>LeBonCoup c'est facile</h1>
            <p>Avec <strong>LeBonCoup</strong>, vendez le matériel que vous n'utilisez plus ou profitez de nos annonces pour vous équiper sans vous ruiner !</p>
            <?php
    ?>
            <p>Découvrer les annonces prés de chez vous ou créez votre compte pour poster vos propres annonces de vente. LeBonCoup rassemble des miliers d'annonces :</p>
            <ul>
                <li>Kayak</li>
                <li>Livres</li>
                <li>Jouets</li>
            </ul>
            <p>Ce n'est qu'une question de temps avant que vous trouviez votre bonheur. </p>
        </aside><!--

        
        INSCRIPTION

        -->
        </section>
    </main>

    <!------------------>
    <!-- PIED DE PAGE -->
    <!------------------>
    
    <footer>
        <p>Projet IUT Sophia - IDSE - 2015 - Junp Studio</p>
    </footer>

</body>
</html>