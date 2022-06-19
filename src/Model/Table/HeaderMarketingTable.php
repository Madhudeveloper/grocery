<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HeaderMarketing Model
 *
 * @method \App\Model\Entity\HeaderMarketing get($primaryKey, $options = [])
 * @method \App\Model\Entity\HeaderMarketing newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HeaderMarketing[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HeaderMarketing|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HeaderMarketing saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HeaderMarketing patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HeaderMarketing[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HeaderMarketing findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HeaderMarketingTable extends Table
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

        $this->setTable('header_marketing');
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
            ->scalar('text1')
            ->requirePresence('text1', 'create')
            ->notEmptyString('text1');

        $validator
            ->scalar('text2')
            ->requirePresence('text2', 'create')
            ->notEmptyString('text2');

        $validator
            ->scalar('text3')
            ->requirePresence('text3', 'create')
            ->notEmptyString('text3');

        return $validator;
    }
}
