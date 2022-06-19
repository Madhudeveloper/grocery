<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \App\Model\Table\ProductSubCategoriesTable&\Cake\ORM\Association\BelongsTo $ProductSubCategories
 * @property \App\Model\Table\BrandsTable&\Cake\ORM\Association\BelongsTo $Brands
 * @property &\Cake\ORM\Association\HasMany $OrderProducts
 * @property \App\Model\Table\ProductVariantsTable&\Cake\ORM\Association\HasMany $ProductVariants
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductsTable extends Table
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

        $this->setTable('products');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ProductSubCategories', [
            'foreignKey' => 'product_sub_category_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Brands', [
            'foreignKey' => 'brand_id',
            'joinType' => 'INNER',
        ]);
         $this->belongsTo('OrderInvoices', [
            'foreignKey' => 'id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('OrderProducts', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('ProductVariants', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('Reviews', [
            'foreignKey' => 'product_id',
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
            ->scalar('slug')
            ->maxLength('slug', 255)
            ->allowEmptyString('slug');

        $validator
            ->scalar('product_name')
            ->maxLength('product_name', 255)
            ->requirePresence('product_name', 'create')
            ->notEmptyString('product_name');

        $validator
            ->scalar('product_description')
            ->requirePresence('product_description', 'create')
            ->notEmptyString('product_description');

        $validator
            ->integer('is_feature')
            ->notEmptyString('is_feature');

        $validator
            ->integer('is_popular')
            ->notEmptyString('is_popular');

        $validator
            ->dateTime('deals_end_day')
            ->allowEmptyDateTime('deals_end_day');

        // $validator
        //     ->integer('is_deleted')
        //     ->requirePresence('is_deleted', 'create')
        //     ->notEmptyString('is_deleted');

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
        $rules->add($rules->existsIn(['product_sub_category_id'], 'ProductSubCategories'));
        $rules->add($rules->existsIn(['brand_id'], 'Brands'));

        return $rules;
    }
}
