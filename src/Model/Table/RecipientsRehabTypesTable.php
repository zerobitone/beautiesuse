<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RecipientsRehabTypes Model
 *
 * @property \App\Model\Table\RecipientsTable&\Cake\ORM\Association\BelongsTo $Recipients
 * @property \App\Model\Table\RehabTypesTable&\Cake\ORM\Association\BelongsTo $RehabTypes
 *
 * @method \App\Model\Entity\RecipientsRehabType newEmptyEntity()
 * @method \App\Model\Entity\RecipientsRehabType newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\RecipientsRehabType> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RecipientsRehabType get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\RecipientsRehabType findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\RecipientsRehabType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\RecipientsRehabType> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\RecipientsRehabType|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\RecipientsRehabType saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\RecipientsRehabType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RecipientsRehabType>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RecipientsRehabType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RecipientsRehabType> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RecipientsRehabType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RecipientsRehabType>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RecipientsRehabType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RecipientsRehabType> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RecipientsRehabTypesTable extends Table
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

        $this->setTable('recipients_rehab_types');
        $this->setDisplayField(['recipient_id', 'type_id']);
        $this->setPrimaryKey(['recipient_id', 'type_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Recipients', [
            'foreignKey' => 'recipient_id',
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
        $rules->add($rules->existsIn(['recipient_id'], 'Recipients'), ['errorField' => 'recipient_id']);
        $rules->add($rules->existsIn(['type_id'], 'RehabTypes'), ['errorField' => 'type_id']);

        return $rules;
    }
}
