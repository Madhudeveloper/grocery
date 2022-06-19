<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Subbanners Model
 *
 * @method \App\Model\Entity\Subbanner get($primaryKey, $options = [])
 * @method \App\Model\Entity\Subbanner newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Subbanner[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Subbanner|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subbanner saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subbanner patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Subbanner[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Subbanner findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SubbannersTable extends Table
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

        $this->setTable('subbanners');
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
            ->scalar('sub_title')
            ->maxLength('sub_title', 255)
            ->requirePresence('sub_title', 'create')
            ->notEmptyString('sub_title');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

        $validator
            ->scalar('button_name')
            ->maxLength('button_name', 255)
            ->requirePresence('button_name', 'create')
            ->notEmptyString('button_name');

        return $validator;
    }
}
