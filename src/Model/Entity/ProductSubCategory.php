<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductSubCategory Entity
 *
 * @property int $id
 * @property int $product_category_id
 * @property string $name
 * @property string|null $slug
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ProductCategory $product_category
 */
class ProductSubCategory extends Entity
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
        'product_category_id' => true,
        'name' => true,
        'slug' => true,
        'created' => true,
        'modified' => true,
        'product_category' => true,
    ];
}
