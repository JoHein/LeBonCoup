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

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

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
            <a href="http://localhost/leboncoup/users/logout"><button>Logout</button>
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
            <li><a href="/leboncoup">Accueil</a></li><!--
            --><li><a href="view/cpu.php">Processeur</a></li><!--
            --><li><a href="view/contact.php">Contact</a></li><!--
            <?php ?>
            --><?php if($this->request->session()->check('Auth.User.username')){
            echo '<li><a href="/leboncoup/annonces/add">Créer une Annonce</a></li>';
            echo '<li><a href="http://localhost/leboncoup/users/compte">Mon compte</a></li>';

            }
            ?>
        </ul>
    </nav>

    <!------------------>
    <!-- CONTENU      -->
    <!------------------>
    
    <main>
            <img src="view/carte.png" width="100%" height="250px" alt="photo de fond"/>

        
         <section id="inscription">

            <h2>Mettre a jour mes infos <?php echo $this->request->session()->read('Auth.User.username'); ?></h2>
            
            <?= $this->Form->create('User') ?>
                <legend><?= __('Mise a jour d\'un utilisateur') ?></legend>
                
                <?= $this->Form->hidden('id', array('value'=>$this->request->session()->read('Auth.User.id')))?>
                <?= $this->Form->input('username', array('value' => $this->request->session()->read('Auth.User.username'))) ?>

                <?= $this->Form->input('password',array('label'=>'Nouveau password')) ?>
                
                <?= $this->Form->input('prenom', array('value' => $this->request->session()->read('Auth.User.prenom'))) ?>
                
                <?= $this->Form->input('email', array('value' => $this->request->session()->read('Auth.User.email'))) ?>
                
                <?= $this->Form->input('telephone', array('value' => $this->request->session()->read('Auth.User.telephone'))) ?>           
                              
               <?= $this->Form->button(__('Mettre a jour')); ?>
        <?= $this->Form->end() ?>
        </section>

        <section>

             <?php 

        echo $annonces = $this->requestAction('/annonces/onlymine');

           
            ?>




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