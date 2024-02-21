<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RehabFacilities Model
 *
 * @method \App\Model\Entity\RehabFacility newEmptyEntity()
 * @method \App\Model\Entity\RehabFacility newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\RehabFacility> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RehabFacility get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\RehabFacility findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\RehabFacility patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\RehabFacility> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\RehabFacility|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\RehabFacility saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\RehabFacility>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabFacility>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RehabFacility>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabFacility> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RehabFacility>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabFacility>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RehabFacility>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabFacility> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RehabFacilitiesTable extends Table
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

        $this->setTable('rehab_facilities');
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
            ->scalar('street_address_line1')
            ->maxLength('street_address_line1', 255)
            ->allowEmptyString('street_address_line1');

        $validator
            ->scalar('street_address_line2')
            ->maxLength('street_address_line2', 255)
            ->allowEmptyString('street_address_line2');

        $validator
            ->scalar('city')
            ->maxLength('city', 100)
            ->allowEmptyString('city');

        $validator
            ->scalar('state_province')
            ->maxLength('state_province', 50)
            ->allowEmptyString('state_province');

        $validator
            ->scalar('postal_code')
            ->maxLength('postal_code', 20)
            ->allowEmptyString('postal_code');

        $validator
            ->scalar('country')
            ->maxLength('country', 100)
            ->allowEmptyString('country');

        $validator
            ->scalar('avatar_path')
            ->maxLength('avatar_path', 255)
            ->allowEmptyString('avatar_path');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 250)
            ->allowEmptyString('password');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 250)
            ->allowEmptyString('phone');

        return $validator;
    }
}
