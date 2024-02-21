<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DoctorsRegistration Model
 *
 * @method \App\Model\Entity\DoctorsRegistration newEmptyEntity()
 * @method \App\Model\Entity\DoctorsRegistration newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\DoctorsRegistration> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DoctorsRegistration get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\DoctorsRegistration findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\DoctorsRegistration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\DoctorsRegistration> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DoctorsRegistration|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\DoctorsRegistration saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\DoctorsRegistration>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DoctorsRegistration>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DoctorsRegistration>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DoctorsRegistration> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DoctorsRegistration>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DoctorsRegistration>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DoctorsRegistration>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DoctorsRegistration> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DoctorsRegistrationTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('doctors_registration');
        $this->setDisplayField('doctor_id');
        $this->setPrimaryKey('doctor_id');

        $this->addBehavior('Timestamp');
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
            ->dateTime('registration_date')
            ->allowEmptyDateTime('registration_date');

        return $validator;
    }
}
