<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductVariants Model
 *
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 * @property &\Cake\ORM\Association\BelongsTo $Uoms
 * @property \App\Model\Table\OrderProductsTable&\Cake\ORM\Association\HasMany $OrderProducts
 *
 * @method \App\Model\Entity\ProductVariant get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductVariant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductVariant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductVariant|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductVariant saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductVariant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductVariant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductVariant findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductVariantsTable extends Table
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

        $this->setTable('product_variants');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Uoms', [
            'foreignKey' => 'uom_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('OrderProducts', [
            'foreignKey' => 'product_variant_id',
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
            ->scalar('variant')
            ->maxLength('variant', 255)
            ->requirePresence('variant', 'create')
            ->notEmptyString('variant');

        $validator
            ->scalar('price')
            ->maxLength('price', 255)
            ->notEmptyString('price');

        $validator
            ->scalar('offer_percentage')
            ->maxLength('offer_percentage', 11)
            ->notEmptyString('offer_percentage');

        $validator
            ->scalar('gst_percentage')
            ->maxLength('gst_percentage', 10)
            ->notEmptyString('gst_percentage');

        $validator
            ->scalar('skucode')
            ->maxLength('skucode', 255)
            ->requirePresence('skucode', 'create')
            ->notEmptyString('skucode');

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
        $rules->add($rules->existsIn(['product_id'], 'Products'));
        $rules->add($rules->existsIn(['uom_id'], 'Uoms'));

        return $rules;
    }
}
