<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SocialInsuranceProviders Model
 *
 * @property \App\Model\Table\AccountingClerksTable&\Cake\ORM\Association\BelongsToMany $AccountingClerks
 * @property \App\Model\Table\RecipientsTable&\Cake\ORM\Association\BelongsToMany $Recipients
 *
 * @method \App\Model\Entity\SocialInsuranceProvider newEmptyEntity()
 * @method \App\Model\Entity\SocialInsuranceProvider newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\SocialInsuranceProvider> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SocialInsuranceProvider get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\SocialInsuranceProvider findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\SocialInsuranceProvider patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\SocialInsuranceProvider> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SocialInsuranceProvider|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\SocialInsuranceProvider saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\SocialInsuranceProvider>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SocialInsuranceProvider>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SocialInsuranceProvider>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SocialInsuranceProvider> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SocialInsuranceProvider>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SocialInsuranceProvider>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SocialInsuranceProvider>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SocialInsuranceProvider> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SocialInsuranceProvidersTable extends Table
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

        $this->setTable('social_insurance_providers');
        $this->setDisplayField('social_insurance_provider_id');
        $this->setPrimaryKey('social_insurance_provider_id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('AccountingClerks', [
            'foreignKey' => 'social_insurance_provider_id',
            'targetForeignKey' => 'accounting_clerk_id',
            'joinTable' => 'accounting_clerks_social_insurance_providers',
        ]);
        $this->belongsToMany('Recipients', [
            'foreignKey' => 'social_insurance_provider_id',
            'targetForeignKey' => 'recipient_id',
            'joinTable' => 'social_insurance_providers_recipients',
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
            ->scalar('social_insurance_provider_name')
            ->maxLength('social_insurance_provider_name', 255)
            ->allowEmptyString('social_insurance_provider_name');

        $validator
            ->scalar('avatar_path')
            ->maxLength('avatar_path', 255)
            ->allowEmptyString('avatar_path');

        return $validator;
    }
}
