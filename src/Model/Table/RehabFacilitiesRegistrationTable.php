<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RehabFacilitiesRegistration Model
 *
 * @method \App\Model\Entity\RehabFacilitiesRegistration newEmptyEntity()
 * @method \App\Model\Entity\RehabFacilitiesRegistration newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\RehabFacilitiesRegistration> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RehabFacilitiesRegistration get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\RehabFacilitiesRegistration findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\RehabFacilitiesRegistration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\RehabFacilitiesRegistration> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\RehabFacilitiesRegistration|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\RehabFacilitiesRegistration saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\RehabFacilitiesRegistration>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabFacilitiesRegistration>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RehabFacilitiesRegistration>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabFacilitiesRegistration> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RehabFacilitiesRegistration>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabFacilitiesRegistration>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RehabFacilitiesRegistration>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabFacilitiesRegistration> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RehabFacilitiesRegistrationTable extends Table
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

        $this->setTable('rehab_facilities_registration');
        $this->setDisplayField('facility_id');
        $this->setPrimaryKey('facility_id');

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
