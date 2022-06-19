<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrderInvoices Model
 *
 * @property \App\Model\Table\OrdersTable&\Cake\ORM\Association\BelongsTo $Orders
 *
 * @method \App\Model\Entity\OrderInvoice get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrderInvoice newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OrderInvoice[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrderInvoice|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrderInvoice saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrderInvoice patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrderInvoice[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrderInvoice findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrderInvoicesTable extends Table
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

        $this->setTable('order_invoices');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id',
            'joinType' => 'INNER',
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
            ->scalar('billing_name')
            ->maxLength('billing_name', 255)
            ->requirePresence('billing_name', 'create')
            ->notEmptyString('billing_name');

        $validator
            ->scalar('billing_contact_1')
            ->maxLength('billing_contact_1', 255)
            ->requirePresence('billing_contact_1', 'create')
            ->notEmptyString('billing_contact_1');

        $validator
            ->scalar('billing_contact_2')
            ->maxLength('billing_contact_2', 255)
            ->allowEmptyString('billing_contact_2');

        $validator
            ->scalar('billing_email')
            ->maxLength('billing_email', 255)
            ->requirePresence('billing_email', 'create')
            ->notEmptyString('billing_email');

        $validator
            ->scalar('billing_street')
            ->maxLength('billing_street', 255)
            ->requirePresence('billing_street', 'create')
            ->notEmptyString('billing_street');

        $validator
            ->scalar('billing_location')
            ->maxLength('billing_location', 255)
            ->requirePresence('billing_location', 'create')
            ->notEmptyString('billing_location');

        $validator
            ->scalar('billing_city')
            ->maxLength('billing_city', 255)
            ->requirePresence('billing_city', 'create')
            ->notEmptyString('billing_city');

        $validator
            ->scalar('state')
            ->maxLength('state', 255)
            ->allowEmptyString('state');

        $validator
            ->scalar('billing_notes')
            ->maxLength('billing_notes', 255)
            ->allowEmptyString('billing_notes');

        $validator
            ->scalar('billing_pincode')
            ->maxLength('billing_pincode', 255)
            ->requirePresence('billing_pincode', 'create')
            ->notEmptyString('billing_pincode');

        $validator
            ->scalar('dispatch_address')
            ->allowEmptyString('dispatch_address');

        $validator
            ->scalar('courier_name')
            ->maxLength('courier_name', 255)
            ->allowEmptyString('courier_name');

        $validator
            ->scalar('bill_number')
            ->maxLength('bill_number', 255)
            ->allowEmptyString('bill_number');

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
        $rules->add($rules->existsIn(['order_id'], 'Orders'));

        return $rules;
    }
}
