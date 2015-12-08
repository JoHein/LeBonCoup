<div class="logForm">
    		<?= $this->Flash->render('auth') ?>
    		<?= $this->Form->create('/Users/login') ?>
    	    	<fieldset>
    	        <legend><?= __("Merci de rentrer vos nom d'utilisateur et mot de passe") ?></legend>
    	        <?= $this->Form->input('username') ?>
    	        <?= $this->Form->input('password') ?>
    	    	</fieldset>
    		<?= $this->Form->button(__('Se Connecter')); ?>
    		<?= $this->Form->end() ?>
    	</div>