<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrderInvoice Entity
 *
 * @property int $id
 * @property int $order_id
 * @property string $billing_name
 * @property string $billing_contact_1
 * @property string|null $billing_contact_2
 * @property string $billing_email
 * @property string $billing_street
 * @property string $billing_location
 * @property string $billing_city
 * @property string|null $state
 * @property string|null $billing_notes
 * @property string $billing_pincode
 * @property string|null $dispatch_address
 * @property string|null $courier_name
 * @property string|null $bill_number
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Order $order
 */
class OrderInvoice extends Entity
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
        'order_id' => true,
        'billing_name' => true,
        'billing_contact_1' => true,
        'billing_contact_2' => true,
        'billing_email' => true,
        'billing_street' => true,
        'billing_location' => true,
        'billing_city' => true,
        'state' => true,
        'billing_notes' => true,
        'billing_pincode' => true,
        'dispatch_address' => true,
        'courier_name' => true,
        'bill_number' => true,
        'created' => true,
        'modified' => true,
        'order' => true,
    ];
}
