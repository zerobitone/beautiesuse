<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DoctorsLogin Model
 *
 * @method \App\Model\Entity\DoctorsLogin newEmptyEntity()
 * @method \App\Model\Entity\DoctorsLogin newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\DoctorsLogin> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DoctorsLogin get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\DoctorsLogin findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\DoctorsLogin patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\DoctorsLogin> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DoctorsLogin|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\DoctorsLogin saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\DoctorsLogin>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DoctorsLogin>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DoctorsLogin>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DoctorsLogin> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DoctorsLogin>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DoctorsLogin>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DoctorsLogin>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DoctorsLogin> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DoctorsLoginTable extends Table
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

        $this->setTable('doctors_login');
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
            ->dateTime('last_login')
            ->allowEmptyDateTime('last_login');

        return $validator;
    }
}
