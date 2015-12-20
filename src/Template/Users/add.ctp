<!-- INSCRIPTION-->
        <section id="inscription">

            <h2>S'inscrire en deux temps,<br/>trois mouvements !</h2>
            
            <?= $this->Form->create($user) ?>
                <legend><?= __('Ajouter un utilisateur') ?></legend>

                <?= $this->Form->input('username') ?>

                <?= $this->Form->input('password') ?>
                
                <?= $this->Form->input('prenom') ?>
                
                <?= $this->Form->input('email') ?>
                
                <?= $this->Form->input('telephone') ?>           
                              
               <?= $this->Form->button(__('Ajouter')); ?>
		<?= $this->Form->end() ?>
        </section>