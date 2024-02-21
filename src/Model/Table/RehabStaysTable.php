<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RehabStays Model
 *
 * @property \App\Model\Table\RecipientsTable&\Cake\ORM\Association\BelongsTo $Recipients
 * @property \App\Model\Table\SocialInsuranceProvidersTable&\Cake\ORM\Association\BelongsTo $SocialInsuranceProviders
 * @property \App\Model\Table\RehabFacilitiesTable&\Cake\ORM\Association\BelongsTo $RehabFacilities
 *
 * @method \App\Model\Entity\RehabStay newEmptyEntity()
 * @method \App\Model\Entity\RehabStay newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\RehabStay> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RehabStay get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\RehabStay findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\RehabStay patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\RehabStay> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\RehabStay|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\RehabStay saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\RehabStay>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabStay>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RehabStay>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabStay> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RehabStay>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabStay>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RehabStay>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabStay> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RehabStaysTable extends Table
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

        $this->setTable('rehab_stays');
        $this->setDisplayField('stay_id');
        $this->setPrimaryKey('stay_id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Recipients', [
            'foreignKey' => 'recipient_id',
        ]);
        $this->belongsTo('SocialInsuranceProviders', [
            'foreignKey' => 'social_insurance_provider_id',
        ]);
        $this->belongsTo('RehabFacilities', [
            'foreignKey' => 'facility_id',
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
            ->integer('recipient_id')
            ->allowEmptyString('recipient_id');

        $validator
            ->integer('social_insurance_provider_id')
            ->allowEmptyString('social_insurance_provider_id');

        $validator
            ->integer('facility_id')
            ->allowEmptyString('facility_id');

        $validator
            ->scalar('status')
            ->allowEmptyString('status');

        $validator
            ->date('start_date')
            ->allowEmptyDate('start_date');

        $validator
            ->date('end_date')
            ->allowEmptyDate('end_date');

        $validator
            ->integer('length_of_stay')
            ->allowEmptyString('length_of_stay');

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
        $rules->add($rules->existsIn(['recipient_id'], 'Recipients'), ['errorField' => 'recipient_id']);
        $rules->add($rules->existsIn(['social_insurance_provider_id'], 'SocialInsuranceProviders'), ['errorField' => 'social_insurance_provider_id']);
        $rules->add($rules->existsIn(['facility_id'], 'RehabFacilities'), ['errorField' => 'facility_id']);

        return $rules;
    }
}
