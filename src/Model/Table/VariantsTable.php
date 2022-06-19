<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Variants Model
 *
 * @method \App\Model\Entity\Variant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Variant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Variant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Variant|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Variant saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Variant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Variant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Variant findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VariantsTable extends Table
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

        $this->setTable('variants');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

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
            ->scalar('variant_name')
            ->maxLength('variant_name', 30)
            ->requirePresence('variant_name', 'create')
            ->notEmptyString('variant_name');

        return $validator;
    }
}
