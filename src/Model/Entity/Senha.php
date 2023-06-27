<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Senha Entity
 *
 * @property int $id
 * @property string|null $senha
 * @property int $active
 * @property \Cake\I18n\FrozenTime|null $modify_on
 * @property \Cake\I18n\FrozenTime|null $date_current
 */
class Senha extends Entity
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
        'senha' => true,
        'active' => true,
        'modify_on' => true,
        'date_current' => true,
    ];
}
