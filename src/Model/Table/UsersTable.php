<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users Model
 *
 * @property \App\Model\Table\UserRolesTable&\Cake\ORM\Association\BelongsTo $UserRoles
 * @property &\Cake\ORM\Association\HasMany $Customers
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('UserRoles', [
            'foreignKey' => 'user_role_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Orders', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('Customers', [
            'foreignKey' => 'user_id',
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
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 100)
            ->allowEmptyString('mobile');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->allowEmptyString('password');

        $validator
            ->integer('created_by')
            ->notEmptyString('created_by');

        $validator
            ->integer('status')
            ->notEmptyString('status');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['user_role_id'], 'UserRoles'));

        return $rules;
    }

    public function getUser(\Cake\Datasource\EntityInterface $profile, \Cake\Http\Session $session) {
        if(empty($user->email)) {
            throw new \RuntimeException('Please create an account with us.');
        }

        $userId = $_SESSION->read('Auth.User.id');
        if($userId){
            return $this->get($userId);
        }

        $user = $this->find()
        ->where(['email' => $user->email])
        ->first();

        if($user){
            return $user;
        }

        $user = $this->newEntity();
        $userData['email'] = $user->email;
        $userData['name'] = $user->name;
        $userData['user_role_id'] = 3;
        $user = $this->patchEntity($user,$userData);
       
        $user = $this->save($user);

        if(!$user) {
            throw new \RuntimeException('Please create an account with us');
        }

        return $user;
    }

    public function validationPassword(Validator $validator )
    {

        $validator
            ->add('old_password','custom',[
                'rule'=>  function($value, $context){
                    $user = $this->get($context['data']['id']);
                    if ($user) {
                        if ((new DefaultPasswordHasher)->check($value, $user->password)) {
                            return true;
                        }
                    }
                    return false;
                },
                'message'=>'The old password does not match the current password!',
            ])
            ->notEmpty('old_password');

        $validator
            ->add('password', [
                'length' => [
                    'rule' => ['minLength', 6],
                    'message' => 'The password have to be at least 6 characters!',
                ]
            ])
            ->add('password',[
                'match'=>[
                    'rule'=> ['compareWith','confirm_password'],
                    'message'=>'The passwords and confirm passwords does not match!',
                ]
            ])
            ->notEmpty('password');
        $validator
            ->add('confirm_password', [
                'length' => [
                    'rule' => ['minLength', 6],
                    'message' => 'The password have to be at least 6 characters!',
                ]
            ])
            ->notEmpty('confirm_password');

        return $validator;
    }
}
