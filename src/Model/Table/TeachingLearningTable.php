<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TeachingLearning Model
 *
 * @method \App\Model\Entity\TeachingLearning newEmptyEntity()
 * @method \App\Model\Entity\TeachingLearning newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TeachingLearning[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TeachingLearning get($primaryKey, $options = [])
 * @method \App\Model\Entity\TeachingLearning findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TeachingLearning patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TeachingLearning[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TeachingLearning|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TeachingLearning saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TeachingLearning[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TeachingLearning[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TeachingLearning[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TeachingLearning[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TeachingLearningTable extends Table
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

        $this->setTable('teaching_learning');
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
            ->scalar('passingYear')
            ->maxLength('passingYear', 4)
            ->allowEmptyString('passingYear');

        $validator
            ->scalar('course')
            ->maxLength('course', 512)
            ->allowEmptyString('course');

        $validator
            ->scalar('ans1')
            ->maxLength('ans1', 11)
            ->allowEmptyString('ans1');

        $validator
            ->scalar('ans2')
            ->maxLength('ans2', 11)
            ->allowEmptyString('ans2');

        $validator
            ->scalar('ans3')
            ->maxLength('ans3', 11)
            ->allowEmptyString('ans3');

        $validator
            ->scalar('ans4')
            ->maxLength('ans4', 11)
            ->allowEmptyString('ans4');

        $validator
            ->scalar('ans5')
            ->maxLength('ans5', 11)
            ->allowEmptyString('ans5');

        $validator
            ->scalar('ans6')
            ->maxLength('ans6', 11)
            ->allowEmptyString('ans6');

        $validator
            ->scalar('ans7')
            ->maxLength('ans7', 11)
            ->allowEmptyString('ans7');

        $validator
            ->scalar('ans8')
            ->maxLength('ans8', 11)
            ->allowEmptyString('ans8');

        $validator
            ->scalar('ans9')
            ->maxLength('ans9', 11)
            ->allowEmptyString('ans9');

        $validator
            ->scalar('ans10')
            ->maxLength('ans10', 11)
            ->allowEmptyString('ans10');

        $validator
            ->scalar('ans11')
            ->maxLength('ans11', 11)
            ->allowEmptyString('ans11');

        $validator
            ->scalar('ans12')
            ->maxLength('ans12', 11)
            ->allowEmptyString('ans12');

        $validator
            ->scalar('ans13')
            ->maxLength('ans13', 11)
            ->allowEmptyString('ans13');

        $validator
            ->scalar('ans14')
            ->maxLength('ans14', 11)
            ->allowEmptyString('ans14');

        $validator
            ->scalar('ans15')
            ->maxLength('ans15', 11)
            ->allowEmptyString('ans15');

        $validator
            ->scalar('ans16')
            ->maxLength('ans16', 11)
            ->allowEmptyString('ans16');

        $validator
            ->scalar('ans17')
            ->maxLength('ans17', 11)
            ->allowEmptyString('ans17');

        return $validator;
    }
}
