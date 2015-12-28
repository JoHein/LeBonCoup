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
    <img id="logo" src="../img/pipboy.png" alt="logo Leboncoup" title="leboncoup"/>

    <div class="logForm">

    <?php
     if($this->request->session()->check('Auth.User.username')){
            echo "Bienvenu ".$this->request->session()->read('Auth.User.username')."!";
            ?>
            <a href="/leboncoup/users/logout"><button>Logout</button>
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
            <?php ?>
            --><?php
            if ($this->request->session()->check('Auth.User.username')=='adminSEF55') {
               ?>
                <a href="annonces/indexadmin"><button>Administration</button></a>
        <?php
            }
         ?>    
        </ul>
    </nav>
    <section class="blockContentCust">    

<h1>Administration</h1>
<table>
    <tr>
        <th>Catégorie</th>
        <th>Titre</th>
        <th>Prix</th>
        <th>Image</th>
        <th></th>
    </tr>

<div class="searchCust">
     <?=  $this->Form->create('Annonce',['action' => 'searchcatadmin']) ?>

    <?= $this->Form->label('Catégorie') ?>
    <?=  $this->Form->select('cat',array('empty' =>'(choisir une categorie)','Automobile' => 'Automobile', 'Moto' => 'Moto', 'Location Immobilier' => 'Location Immobilier', 'Jeux video'=> 'Jeux video', 'Bricolage' => 'Bricolage', 'Nautisme' => 'Nautisme', 'Jardinnage'=>'Jardinnage', 'Vêtements'=>'Vêtements', 'Sport'=>'Sport')); ?>

    <?=  $this->Form->button(__("Rechercher"))?>
    <?=  $this->Form->end()?>

</div>

    <?php foreach ($annonces as $annonce): ?>
    <tr >
        <td><?= $annonce->cat ?></td>
        <td>
            <?= $this->Html->link($annonce->titre, ['action' => 'view', $annonce->idAnn]) ?>
        </td>
        <td>
            <?= $annonce->prix; echo "€";?>
        </td>
        <td>
            <?php $imgAnn = ".".$annonce->image ?>

         <img class="imgListCust" src=<?= $imgAnn ?>>
        </td>

        <td>
        <?= $this->Html->link("Voir annonce", ['action' => 'view', $annonce->idAnn]) ?>
        </td>

        <td width="25%">
         <?= $this->Form->postLink(
                'Supprimer',
                ['action' => 'deleteadmin', $annonce->idAnn],
                ['confirm' => 'Etes-vous sûr?'])
            ?>
        </td>

    </tr>
    <?php endforeach; ?>
</table>

</section>
<footer>
        <p>Projet IUT Sophia - IDSE - 2015 - Junp Studio</p>
</footer>


</body>
</html>


