<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Uom Entity
 *
 * @property int $id
 * @property string $uomname
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ProductVariant[] $product_variants
 */
class Uom extends Entity
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
        'uomname' => true,
        'created' => true,
        'modified' => true,
        'product_variants' => true,
    ];
}
