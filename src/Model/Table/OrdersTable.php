<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orders Model
 *
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\CouponsTable&\Cake\ORM\Association\BelongsTo $Coupons
 * @property \App\Model\Table\OrderInvoicesTable&\Cake\ORM\Association\HasMany $OrderInvoices
 * @property \App\Model\Table\OrderProductsTable&\Cake\ORM\Association\HasMany $OrderProducts
 * @property \App\Model\Table\OrderStatusTable&\Cake\ORM\Association\HasMany $OrderStatus
 *
 * @method \App\Model\Entity\Order get($primaryKey, $options = [])
 * @method \App\Model\Entity\Order newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Order[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Order|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Order[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Order findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrdersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('orders');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Coupons', [
            'foreignKey' => 'coupon_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('OrderInvoices', [
            'foreignKey' => 'order_id',
        ]);
        $this->hasMany('OrderProducts', [
            'foreignKey' => 'order_id',
        ]);
        $this->hasMany('OrderStatus', [
            'foreignKey' => 'order_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('order_number')
            ->maxLength('order_number', 255)
            ->allowEmptyString('order_number');

        $validator
            ->scalar('sub_total')
            ->maxLength('sub_total', 255)
            ->notEmptyString('sub_total');

        $validator
            ->scalar('discount')
            ->maxLength('discount', 255)
            ->notEmptyString('discount');

        $validator
            ->scalar('gst_percentage')
            ->maxLength('gst_percentage', 11)
            ->notEmptyString('gst_percentage');

        $validator
            ->scalar('total')
            ->maxLength('total', 2500)
            ->notEmptyString('total');

        $validator
            ->integer('order_type')
            ->notEmptyString('order_type');

        $validator
            ->integer('payment_type')
            ->notEmptyString('payment_type');

        $validator
            ->integer('status')
            ->notEmptyString('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['coupon_id'], 'Coupons'));

        return $rules;
    }
}
