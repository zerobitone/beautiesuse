<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SocialInsuranceProvidersContactDetails Model
 *
 * @method \App\Model\Entity\SocialInsuranceProvidersContactDetail newEmptyEntity()
 * @method \App\Model\Entity\SocialInsuranceProvidersContactDetail newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\SocialInsuranceProvidersContactDetail> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SocialInsuranceProvidersContactDetail get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\SocialInsuranceProvidersContactDetail findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\SocialInsuranceProvidersContactDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\SocialInsuranceProvidersContactDetail> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SocialInsuranceProvidersContactDetail|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\SocialInsuranceProvidersContactDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\SocialInsuranceProvidersContactDetail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SocialInsuranceProvidersContactDetail>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SocialInsuranceProvidersContactDetail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SocialInsuranceProvidersContactDetail> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SocialInsuranceProvidersContactDetail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SocialInsuranceProvidersContactDetail>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SocialInsuranceProvidersContactDetail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SocialInsuranceProvidersContactDetail> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SocialInsuranceProvidersContactDetailsTable extends Table
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

        $this->setTable('social_insurance_providers_contact_details');
        $this->setDisplayField('social_insurance_provider_id');
        $this->setPrimaryKey('social_insurance_provider_id');

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
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 250)
            ->allowEmptyString('phone');

        return $validator;
    }
}
