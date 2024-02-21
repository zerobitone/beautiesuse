<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RehabStaysTypes Model
 *
 * @property \App\Model\Table\RehabStaysTable&\Cake\ORM\Association\BelongsTo $RehabStays
 * @property \App\Model\Table\RehabTypesTable&\Cake\ORM\Association\BelongsTo $RehabTypes
 *
 * @method \App\Model\Entity\RehabStaysType newEmptyEntity()
 * @method \App\Model\Entity\RehabStaysType newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\RehabStaysType> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RehabStaysType get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\RehabStaysType findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\RehabStaysType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\RehabStaysType> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\RehabStaysType|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\RehabStaysType saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\RehabStaysType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabStaysType>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RehabStaysType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabStaysType> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RehabStaysType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabStaysType>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RehabStaysType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabStaysType> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RehabStaysTypesTable extends Table
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

        $this->setTable('rehab_stays_types');
        $this->setDisplayField(['stay_id', 'type_id']);
        $this->setPrimaryKey(['stay_id', 'type_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('RehabStays', [
            'foreignKey' => 'stay_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('RehabTypes', [
            'foreignKey' => 'type_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['stay_id'], 'RehabStays'), ['errorField' => 'stay_id']);
        $rules->add($rules->existsIn(['type_id'], 'RehabTypes'), ['errorField' => 'type_id']);

        return $rules;
    }
}
