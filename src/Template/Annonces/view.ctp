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
<h1><?= $annonce->titre ?></h1>
<table  class="tdtableCust" >
	<tr>
		<td class="titreTabCust">
		<h4 >Catégorie</h4>
	</td>
		<td class="contentTabCust">
<p><?= $annonce->cat ?></p>
		</td>
<td class="titreTabCust">
		<h4>Description</h4>
	</td>
		<td class="contentTabCust">
			<blockquote class="descriptionCust"><?= $annonce->description ?></blockquote>

		</td>
		
		
	
</tr>
	<tr class="endtabCust">

		<td class="titreTabCust">
			<h4>Coordonnées</h4>
		</td>

		<td class="contentTabCust">
			<?php $userid=$annonce->iduser; 
			echo ($user = $this->requestAction('/users/view/'.$userid));
			?>
		</td>

		<td class="titreTabCust">
			<h4>Prix</h4>
		</td>

		<td class="contentTabCust" >
			<p><?= $annonce->prix ?> €</p>
		</td>
	</tr>
</table>
<div class="imgAnnCust">
	<?php
			 $imgAnn = "../.".$annonce->image;
			 ?>

		<img class="imgCust" src=<?= $imgAnn ?>>
</div>
</section>

 <footer>
        <p>Projet IUT Sophia - IDSE - 2015 - Junp Studio</p>
    </footer>
</body>
</html>