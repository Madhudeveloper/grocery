<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AboutPage Entity
 *
 * @property int $id
 * @property string $title
 * @property string $sub_title
 * @property string $image
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class AboutPage extends Entity
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
        'title' => true,
        'sub_title' => true,
        'image' => true,
        'created' => true,
        'modified' => true,
    ];
}
