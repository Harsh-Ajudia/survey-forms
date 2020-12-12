<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PersonalDetails Model
 *
 * @method \App\Model\Entity\PersonalDetail newEmptyEntity()
 * @method \App\Model\Entity\PersonalDetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PersonalDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PersonalDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\PersonalDetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PersonalDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PersonalDetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PersonalDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PersonalDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PersonalDetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PersonalDetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PersonalDetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PersonalDetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PersonalDetailsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('personal_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('firstName')
            ->maxLength('firstName', 255)
            ->requirePresence('firstName', 'create')
            ->notEmptyString('firstName', 'First Name is required');

        $validator
            ->scalar('lastName')
            ->maxLength('lastName', 255)
            ->requirePresence('lastName', 'create')
            ->notEmptyString('lastName', 'Last Name is required');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email', 'Email is required');

        $validator
            ->integer('country')
            ->allowEmptyString('country');

        $validator
            ->scalar('mobileNumber')
            ->maxLength('mobileNumber', 16)
            ->allowEmptyString('mobileNumber');

        return $validator;
    }
}
