<?php
namespace App\Model\Table;

use App\Model\Entity\Annonce;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Annonces Model
 *
 */
class AnnoncesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->addBehavior('Utils.Uploadable', [
            'image' =>[
                'field' => 'idAnn',
                'path' => './img/{model}/',
                'fileName' => '{field}.{extension}'
            ],
        ]);

       
        $this->table('annonces');
        $this->displayField('idAnn');
        $this->primaryKey('idAnn');

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('iduser', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('iduser');

        $validator
            ->add('idAnn', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('idAnn', 'create');

        $validator
            ->notEmpty('titre');

        $validator->notEmpty('cat');    

        $validator
            ->notEmpty('lieu');

        $validator
            ->add('prix', 'valid', ['rule' => 'numeric'])
            ->notEmpty('prix');

        $validator
        ->add('image', 'valid', ['rule' => ['mimeType', ['image/jpeg', 'image/png']], 'message' => __('Jpg ou PNG uniquement')])
        ->notEmpty('image');
          

        $validator
            ->notEmpty('description');

        return $validator;
    }

}
