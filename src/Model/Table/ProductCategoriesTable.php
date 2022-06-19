<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\Behavior;

/**
 * ProductCategories Model
 *
 * @method \App\Model\Entity\ProductCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductCategory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductCategory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductCategory findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductCategoriesTable extends Table
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

        $this->setTable('product_categories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        // $this->addBehavior('Muffin/Slug.Slug', [
        //     'implementedEvents' => [
        //         'Model.beforeSave' => 'beforeSave'
        //     ],
        //     'onUpdate' => true 
        // ]);

         $this->hasMany('ProductSubCategories', [
            'foreignKey' => 'product_category_id',
        ]);

        $this->hasMany('Products', [
            'foreignKey' => 'product_sub_category_id',
        ]);

        $this->addBehavior('Timestamp');
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('slug')
            ->maxLength('slug', 255)
            ->requirePresence('slug', 'create')
            ->notEmptyString('slug');    

        return $validator;
    }
}
