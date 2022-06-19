<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SocialLinks Model
 *
 * @method \App\Model\Entity\SocialLink get($primaryKey, $options = [])
 * @method \App\Model\Entity\SocialLink newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SocialLink[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SocialLink|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SocialLink saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SocialLink patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SocialLink[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SocialLink findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SocialLinksTable extends Table
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

        $this->setTable('social_links');
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
            ->scalar('facebook_link')
            ->maxLength('facebook_link', 255)
            ->requirePresence('facebook_link', 'create')
            ->notEmptyString('facebook_link');

        $validator
            ->scalar('twitter_link')
            ->maxLength('twitter_link', 255)
            ->requirePresence('twitter_link', 'create')
            ->notEmptyString('twitter_link');

        $validator
            ->scalar('instagram_link')
            ->maxLength('instagram_link', 255)
            ->requirePresence('instagram_link', 'create')
            ->notEmptyString('instagram_link');

        $validator
            ->scalar('linkedin_link')
            ->maxLength('linkedin_link', 255)
            ->requirePresence('linkedin_link', 'create')
            ->notEmptyString('linkedin_link');

        $validator
            ->scalar('pintrest_link')
            ->maxLength('pintrest_link', 255)
            ->requirePresence('pintrest_link', 'create')
            ->notEmptyString('pintrest_link');

        $validator
            ->scalar('youtube_link')
            ->maxLength('youtube_link', 255)
            ->requirePresence('youtube_link', 'create')
            ->notEmptyString('youtube_link');

        $validator
            ->scalar('reserved_text')
            ->maxLength('reserved_text', 255)
            ->requirePresence('reserved_text', 'create')
            ->notEmptyString('reserved_text');

        $validator
            ->scalar('company_name')
            ->maxLength('company_name', 255)
            ->requirePresence('company_name', 'create')
            ->notEmptyString('company_name');

        $validator
            ->scalar('address')
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->integer('gst')
            ->requirePresence('gst', 'create')
            ->notEmptyString('gst');

        $validator
            ->scalar('email_address')
            ->maxLength('email_address', 255)
            ->requirePresence('email_address', 'create')
            ->notEmptyString('email_address');

        return $validator;
    }
}
