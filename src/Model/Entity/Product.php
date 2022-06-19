<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property int $product_sub_category_id
 * @property string|null $slug
 * @property string $product_name
 * @property string $product_description
 * @property string $image_1
 * @property string $image_2
 * @property int $brand_id
 * @property string $price
 * @property int $is_feature
 * @property int $is_popular
 * @property \Cake\I18n\FrozenTime|null $deals_end_day
 * @property int $is_deleted
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ProductSubCategory $product_sub_category
 * @property \App\Model\Entity\Brand $brand
 * @property \App\Model\Entity\ProductGroup[] $product_groups
 * @property \App\Model\Entity\ProductVariant[] $product_variants
 * @property \App\Model\Entity\User $user
 */
class Product extends Entity
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
        'product_sub_category_id' => true,
        'slug' => true,
        'product_name' => true,
        'product_description' => true,
        'image_1' => true,
        'image_2' => true,
        'brand_id' => true,
        // 'price' => true,
        'is_feature' => true,
        'is_popular' => true,
        'deals_end_day' => true,
        'is_deleted' => true,
        'created' => true,
        'modified' => true,
        'product_sub_category' => true,
        'brand' => true,
        'product_groups' => true,
        'product_variants' => true,
        'user' => true,
    ];
}
