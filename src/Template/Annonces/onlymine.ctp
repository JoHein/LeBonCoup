<h1>Mes annonces</h1>
<table>
    <tr>
        <th width="25%">Catégorie</th>
        <th width="25%">Titre</th>
        <th width="15%">Image</th>
                <th></th>

    </tr>

    <!-- Ici se trouve l'itération sur l'objet query de nos $articles, l'affichage des infos des articles -->

    <?php foreach ($annonces as $annonce): ?>
    <tr>
        <td width="25%"><?= $annonce->cat ?></td>
        <td width="25%">
            <?= $this->Html->link($annonce->titre, ['action' => 'view', $annonce->idAnn]) ?>
        </td>
        <td width="15%">
            <?php $imgAnn = ".".$annonce->image ?>

         <img width="100%" height="100%" src=<?= $imgAnn ?>>
</td>
<td width="25%">
         <?= $this->Form->postLink(
                'Supprimer',
                ['action' => 'delete', $annonce->idAnn],
                ['confirm' => 'Etes-vous sûr?'])
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>