<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SocialInsuranceProvidersRecipients Model
 *
 * @property \App\Model\Table\SocialInsuranceProvidersTable&\Cake\ORM\Association\BelongsTo $SocialInsuranceProviders
 * @property \App\Model\Table\RecipientsTable&\Cake\ORM\Association\BelongsTo $Recipients
 *
 * @method \App\Model\Entity\SocialInsuranceProvidersRecipient newEmptyEntity()
 * @method \App\Model\Entity\SocialInsuranceProvidersRecipient newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\SocialInsuranceProvidersRecipient> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SocialInsuranceProvidersRecipient get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\SocialInsuranceProvidersRecipient findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\SocialInsuranceProvidersRecipient patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\SocialInsuranceProvidersRecipient> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SocialInsuranceProvidersRecipient|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\SocialInsuranceProvidersRecipient saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\SocialInsuranceProvidersRecipient>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SocialInsuranceProvidersRecipient>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SocialInsuranceProvidersRecipient>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SocialInsuranceProvidersRecipient> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SocialInsuranceProvidersRecipient>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SocialInsuranceProvidersRecipient>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SocialInsuranceProvidersRecipient>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SocialInsuranceProvidersRecipient> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SocialInsuranceProvidersRecipientsTable extends Table
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

        $this->setTable('social_insurance_providers_recipients');
        $this->setDisplayField(['social_insurance_provider_id', 'recipient_id']);
        $this->setPrimaryKey(['social_insurance_provider_id', 'recipient_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('SocialInsuranceProviders', [
            'foreignKey' => 'social_insurance_provider_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Recipients', [
            'foreignKey' => 'recipient_id',
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
        $rules->add($rules->existsIn(['social_insurance_provider_id'], 'SocialInsuranceProviders'), ['errorField' => 'social_insurance_provider_id']);
        $rules->add($rules->existsIn(['recipient_id'], 'Recipients'), ['errorField' => 'recipient_id']);

        return $rules;
    }
}
