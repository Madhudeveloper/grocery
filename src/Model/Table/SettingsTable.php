<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Settings Model
 *
 * @method \App\Model\Entity\Setting get($primaryKey, $options = [])
 * @method \App\Model\Entity\Setting newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Setting[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Setting|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Setting saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Setting patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Setting[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Setting findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SettingsTable extends Table
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

        $this->setTable('settings');
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
            ->scalar('phonenumber')
            ->maxLength('phonenumber', 255)
            ->requirePresence('phonenumber', 'create')
            ->notEmptyString('phonenumber');

        $validator
            ->scalar('image')
            ->maxLength('image', 244)
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

        $validator
            ->scalar('loader_image')
            ->maxLength('loader_image', 255)
            ->requirePresence('loader_image', 'create')
            ->notEmptyFile('loader_image');

        $validator
            ->time('working_hours_start')
            ->requirePresence('working_hours_start', 'create')
            ->notEmptyTime('working_hours_start');

        $validator
            ->time('working_hours_end')
            ->requirePresence('working_hours_end', 'create')
            ->notEmptyTime('working_hours_end');

        return $validator;
    }
}
