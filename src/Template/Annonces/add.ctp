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
            <a href="http://localhost/leboncoup/users/logout"><button>Logout</button>
    <?php
        }else{
            ?>
            <a href="/leboncoup/users/login"><button>Login</button></a>
            <a href="/leboncoup/users/add"><button>Register</button></a>
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
            --><li><a href="/leboncoup/annonces">Annonces</a></li><!--
            --><li><a href="/leboncoup/users/contact">Contact</a></li><!--
            <?php ?>
            --><?php if($this->request->session()->check('Auth.User.username')){
            echo '<li><a href="/leboncoup/annonces/add">Créer une Annonce</a></li>';
            echo '<li><a href="/leboncoup/users/compte">Mon compte</a></li>';

            }
            ?>
        </ul>
    </nav>
<section class="blockContentCust">    

<section class="annonceForm">
<h1>Ajouter une annonce</h1>

	<?=  $this->Form->create($annonce, array('type'=>'file')) ?>

    <?= $this->Form->hidden('iduser', array('value'=>$this->request->session()->read('Auth.User.id')))?>
    <?= $this->Form->hidden('idAnn')?>

	<?= $this->Form->label('Titre') ?>
	<?=  $this->Form->intput('titre') ?>
	<br>

	<?= $this->Form->label('Catégorie') ?>
	<?=  $this->Form->select('cat', array('empty' =>'(choisir une categorie)','Automobile' => 'Automobile', 'Jeux video'=> 'Jeux video', 'Bricolage' => 'Bricolage')); ?>

			<br>

	<?= $this->Form->label('Prix €') ?>
	<?=  $this->Form->intput('prix', array('id'=>'spinner')); ?>


				<br>

	<?= $this->Form->label('Lieu') ?>
	<?=  $this->Form->intput('lieu')?>
				<br>

	<?= $this->Form->label('description') ?>
	<?=  $this->Form->textarea('description')?>
				<br>

    <?=  $this->Form->input('image', array('type'=>"file"))?>
                <br>

	<?=  $this->Form->button(__("Sauvegarder l'annonce"))?>
    <?=  $this->Form->end()?>


</section>
</section>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#currency" ).change(function() {
      $( "#spinner" ).spinner( "option", "culture", $( this ).val() );
    });
 
    $( "#spinner" ).spinner({
      min: 5,
      max: 50000,
      step: 1,
      start: 1000,
      numberFormat: "C"
    });
  });
  </script>

    <footer>
        <p>Projet IUT Sophia - IDSE - 2015 - Junp Studio</p>
    </footer>
</body>
</html>

 
