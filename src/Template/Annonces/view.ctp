
<h1><?= $annonce->titre ?></h1>
<p><?= $annonce->cat ?></p>
<p><?= $annonce->prix ?> €</p>
<blockquote><?= $annonce->description ?></blockquote>

<?php
 $imgAnn = "../.".$annonce->image;
 ?>

<img src=<?= $imgAnn ?>>

 
<?php
$userid=$annonce->iduser;

echo ($user = $this->requestAction('/users/view/'.$userid));


?>