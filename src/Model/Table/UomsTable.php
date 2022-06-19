<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Uoms Model
 *
 * @property \App\Model\Table\ProductVariantsTable&\Cake\ORM\Association\HasMany $ProductVariants
 *
 * @method \App\Model\Entity\Uom get($primaryKey, $options = [])
 * @method \App\Model\Entity\Uom newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Uom[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Uom|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Uom saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Uom patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Uom[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Uom findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UomsTable extends Table
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

        $this->setTable('uoms');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('ProductVariants', [
            'foreignKey' => 'uom_id',
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
            ->scalar('uomname')
            ->maxLength('uomname', 255)
            ->requirePresence('uomname', 'create')
            ->notEmptyString('uomname');

        return $validator;
    }
}
