<p><?= $user->prenom ?> <?= $user->username ?></p>
<?php $mailUser=$user->email ?>
<a href="mailto:<?php echo $mailUser;?>"><?= $user->email ?></a>
<p><?= $user->telephone ?></p>

