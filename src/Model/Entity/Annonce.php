<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Annonce Entity.
 *
 * @property int $iduser
 * @property int $idAnn
 * @property string $titre
 * @property string $lieu
 * @property int $prix
 * @property string $image
 * @property string $description
 */
class Annonce extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'idAnn' => true,
    ];
}
