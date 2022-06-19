<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property string|null $order_number
 * @property string $sub_total
 * @property string $discount
 * @property string $coupon_id
 * @property string $gst_percentage
 * @property string $total
 * @property int $order_type
 * @property int $payment_type
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\OrderInvoice $order_invoice
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Coupon $coupon
 * @property \App\Model\Entity\OrderProduct[] $order_products
 * @property \App\Model\Entity\OrderStatus[] $order_status
 */
class Order extends Entity
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
        'customer_id' => true,
        'order_number' => true,
        'sub_total' => true,
        'discount' => true,
        'coupon_id' => true,
        'gst_percentage' => true,
        'total' => true,
        'order_type' => true,
        'payment_type' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'order_invoice' => true,
        'customer' => true,
        'coupon' => true,
        'order_products' => true,
        'order_status' => true,
    ];
}
