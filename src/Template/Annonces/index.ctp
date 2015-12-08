<h1>Toutes les annonces!</h1>
<table>
    <tr>
        <th>Catégorie</th>
        <th>Titre</th>
        <th>Prix</th>
        <th>Image</th>
    </tr>

    <!-- Ici se trouve l'itération sur l'objet query de nos $articles, l'affichage des infos des articles -->

     <?=  $this->Form->create('Annonce',['action' => 'searchcat']) ?>

    <?= $this->Form->label('Catégorie') ?>
    <?=  $this->Form->select('cat', array('empty' =>'(choisir une categorie)','Automobile' => 'Automobile', 'Jeux video'=> 'Jeux video', 'Bricolage' => 'Bricolage')); ?>

   <?=  $this->Form->input('titre'); ?>

    
    <?=  $this->Form->input('prix', array('label'=>'Prix Maximum')); ?>

    <?=  $this->Form->button(__("Rechercher"))?>
    <?=  $this->Form->end()?>



    <?php foreach ($annonces as $annonce): ?>
    <tr>
        <td><?= $annonce->cat ?></td>
        <td>
            <?= $this->Html->link($annonce->titre, ['action' => 'view', $annonce->idAnn]) ?>
        </td>
        <td>
            <?= $annonce->prix; echo "€";?>
        </td>
        <td>
            <?php $imgAnn = $annonce->image ?>

         <img src=<?= $imgAnn ?>>
        </td>
    </tr>
    <?php endforeach; ?>
</table>


