<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RehabFacilitiesLogin Model
 *
 * @method \App\Model\Entity\RehabFacilitiesLogin newEmptyEntity()
 * @method \App\Model\Entity\RehabFacilitiesLogin newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\RehabFacilitiesLogin> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RehabFacilitiesLogin get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\RehabFacilitiesLogin findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\RehabFacilitiesLogin patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\RehabFacilitiesLogin> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\RehabFacilitiesLogin|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\RehabFacilitiesLogin saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\RehabFacilitiesLogin>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabFacilitiesLogin>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RehabFacilitiesLogin>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabFacilitiesLogin> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RehabFacilitiesLogin>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabFacilitiesLogin>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RehabFacilitiesLogin>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabFacilitiesLogin> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RehabFacilitiesLoginTable extends Table
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

        $this->setTable('rehab_facilities_login');
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
            ->dateTime('last_login')
            ->allowEmptyDateTime('last_login');

        return $validator;
    }
}
