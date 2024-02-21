<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AccountingClerksSocialInsuranceProviders Model
 *
 * @property \App\Model\Table\SocialInsuranceProvidersTable&\Cake\ORM\Association\BelongsTo $SocialInsuranceProviders
 *
 * @method \App\Model\Entity\AccountingClerksSocialInsuranceProvider newEmptyEntity()
 * @method \App\Model\Entity\AccountingClerksSocialInsuranceProvider newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\AccountingClerksSocialInsuranceProvider> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AccountingClerksSocialInsuranceProvider get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\AccountingClerksSocialInsuranceProvider findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\AccountingClerksSocialInsuranceProvider patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\AccountingClerksSocialInsuranceProvider> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AccountingClerksSocialInsuranceProvider|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\AccountingClerksSocialInsuranceProvider saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\AccountingClerksSocialInsuranceProvider>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountingClerksSocialInsuranceProvider>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AccountingClerksSocialInsuranceProvider>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountingClerksSocialInsuranceProvider> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AccountingClerksSocialInsuranceProvider>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountingClerksSocialInsuranceProvider>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AccountingClerksSocialInsuranceProvider>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountingClerksSocialInsuranceProvider> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AccountingClerksSocialInsuranceProvidersTable extends Table
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

        $this->setTable('accounting_clerks_social_insurance_providers');
        $this->setDisplayField('clerk_id');
        $this->setPrimaryKey('clerk_id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('SocialInsuranceProviders', [
            'foreignKey' => 'social_insurance_provider_id',
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
            ->integer('social_insurance_provider_id')
            ->allowEmptyString('social_insurance_provider_id');

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
        $rules->add($rules->existsIn(['social_insurance_provider_id'], 'SocialInsuranceProviders'), ['errorField' => 'social_insurance_provider_id']);

        return $rules;
    }
}
