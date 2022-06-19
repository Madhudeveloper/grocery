<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductVariant Entity
 *
 * @property int $id
 * @property int $product_id
 * @property string $variant
 * @property string $uom_id
 * @property string $price
 * @property string $offer_percentage
 * @property string $gst_percentage
 * @property string $skucode
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\OrderProduct[] $order_products
 */
class ProductVariant extends Entity
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
        'product_id' => true,
        'variant' => true,
        'uom_id' => true,
        'price' => true,
        'offer_percentage' => true,
        'gst_percentage' => true,
        'skucode' => true,
        'created' => true,
        'modified' => true,
        'product' => true,
        'order_products' => true,
    ];
}
