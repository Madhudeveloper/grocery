<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Coupon Entity
 *
 * @property int $id
 * @property string $code
 * @property int $is_active
 * @property \Cake\I18n\FrozenDate $expiry_date
 * @property int|null $coupon_percentage
 * @property string|null $created_for
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Order[] $orders
 */
class Coupon extends Entity
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
        'code' => true,
        'is_active' => true,
        'expiry_date' => true,
        'coupon_percentage' => true,
        'created_for' => true,
        'created' => true,
        'modified' => true,
        'orders' => true,
    ];
}
