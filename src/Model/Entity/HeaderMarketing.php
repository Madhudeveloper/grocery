<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HeaderMarketing Entity
 *
 * @property int $id
 * @property string $text1
 * @property string $text2
 * @property string $text3
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class HeaderMarketing extends Entity
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
        'text1' => true,
        'text2' => true,
        'text3' => true,
        'created' => true,
        'modified' => true,
    ];
}
