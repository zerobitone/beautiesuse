<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DoctorsRecipients Model
 *
 * @property \App\Model\Table\DoctorsTable&\Cake\ORM\Association\BelongsTo $Doctors
 * @property \App\Model\Table\RecipientsTable&\Cake\ORM\Association\BelongsTo $Recipients
 *
 * @method \App\Model\Entity\DoctorsRecipient newEmptyEntity()
 * @method \App\Model\Entity\DoctorsRecipient newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\DoctorsRecipient> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DoctorsRecipient get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\DoctorsRecipient findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\DoctorsRecipient patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\DoctorsRecipient> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DoctorsRecipient|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\DoctorsRecipient saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\DoctorsRecipient>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DoctorsRecipient>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DoctorsRecipient>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DoctorsRecipient> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DoctorsRecipient>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DoctorsRecipient>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DoctorsRecipient>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DoctorsRecipient> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DoctorsRecipientsTable extends Table
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

        $this->setTable('doctors_recipients');
        $this->setDisplayField(['doctor_id', 'recipient_id']);
        $this->setPrimaryKey(['doctor_id', 'recipient_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Doctors', [
            'foreignKey' => 'doctor_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Recipients', [
            'foreignKey' => 'recipient_id',
            'joinType' => 'INNER',
        ]);
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
            ->dateTime('referral_date')
            ->allowEmptyDateTime('referral_date');

        return $validator;
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
        $rules->add($rules->existsIn(['doctor_id'], 'Doctors'), ['errorField' => 'doctor_id']);
        $rules->add($rules->existsIn(['recipient_id'], 'Recipients'), ['errorField' => 'recipient_id']);

        return $rules;
    }
}
