<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdersFixture
 */
class OrdersFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'customer_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'order_number' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'sub_total' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => '0', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'discount' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => '0', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'coupon_id' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => '0', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'gst_percentage' => ['type' => 'string', 'length' => 11, 'null' => false, 'default' => '0', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'total' => ['type' => 'string', 'length' => 2500, 'null' => false, 'default' => '0', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'order_type' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '1 => Shop , 2 => online', 'precision' => null, 'autoIncrement' => null],
        'payment_type' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '0 => COD 1=> Payment', 'precision' => null, 'autoIncrement' => null],
        'status' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '1 => Ordered , 2 => Delivered , 3 => In transit', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'customer_id' => 1,
                'order_number' => 'Lorem ipsum dolor sit amet',
                'sub_total' => 'Lorem ipsum dolor sit amet',
                'discount' => 'Lorem ipsum dolor sit amet',
                'coupon_id' => 'Lorem ip',
                'gst_percentage' => 'Lorem ips',
                'total' => 'Lorem ipsum dolor sit amet',
                'order_type' => 1,
                'payment_type' => 1,
                'status' => 1,
                'created' => '2022-04-15 07:26:23',
                'modified' => '2022-04-15 07:26:23',
            ],
        ];
        parent::init();
    }
}
