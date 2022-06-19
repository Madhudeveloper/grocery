<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContactPages Model
 *
 * @method \App\Model\Entity\ContactPage get($primaryKey, $options = [])
 * @method \App\Model\Entity\ContactPage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ContactPage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ContactPage|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContactPage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContactPage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ContactPage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ContactPage findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContactPagesTable extends Table
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

        $this->setTable('contact_pages');
        $this->setDisplayField('name');
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
            ->scalar('map_link')
            ->maxLength('map_link', 255)
            ->requirePresence('map_link', 'create')
            ->notEmptyString('map_link');

        return $validator;
    }
}
