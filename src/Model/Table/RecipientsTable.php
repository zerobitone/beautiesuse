<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recipients Model
 *
 * @property \App\Model\Table\AccountingClerksTable&\Cake\ORM\Association\BelongsTo $AccountingClerks
 * @property \App\Model\Table\SocialInsuranceProvidersTable&\Cake\ORM\Association\BelongsTo $SocialInsuranceProviders
 * @property \App\Model\Table\RecipientAddressesTable&\Cake\ORM\Association\HasMany $RecipientAddresses
 * @property \App\Model\Table\RecipientsContactDetailsTable&\Cake\ORM\Association\HasMany $RecipientsContactDetails
 * @property \App\Model\Table\RehabStaysTable&\Cake\ORM\Association\HasMany $RehabStays
 * @property \App\Model\Table\DoctorsTable&\Cake\ORM\Association\BelongsToMany $Doctors
 * @property \App\Model\Table\AccountingClerksTable&\Cake\ORM\Association\BelongsToMany $AccountingClerks
 * @property \App\Model\Table\RehabTypesTable&\Cake\ORM\Association\BelongsToMany $RehabTypes
 * @property \App\Model\Table\SocialInsuranceProvidersTable&\Cake\ORM\Association\BelongsToMany $SocialInsuranceProviders
 *
 * @method \App\Model\Entity\Recipient newEmptyEntity()
 * @method \App\Model\Entity\Recipient newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Recipient> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Recipient get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Recipient findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Recipient patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Recipient> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Recipient|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Recipient saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Recipient>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Recipient>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Recipient>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Recipient> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Recipient>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Recipient>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Recipient>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Recipient> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RecipientsTable extends Table
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

        $this->setTable('recipients');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('AccountingClerks', [
            'foreignKey' => 'accounting_clerk_id',
        ]);
        $this->belongsTo('SocialInsuranceProviders', [
            'foreignKey' => 'social_insurance_provider_id',
        ]);
        $this->hasMany('RecipientAddresses', [
            'foreignKey' => 'recipient_id',
        ]);
        $this->hasMany('RecipientsContactDetails', [
            'foreignKey' => 'recipient_id',
        ]);
        $this->hasMany('RehabStays', [
            'foreignKey' => 'recipient_id',
        ]);
        $this->belongsToMany('Doctors', [
            'foreignKey' => 'recipient_id',
            'targetForeignKey' => 'doctor_id',
            'joinTable' => 'doctors_recipients',
        ]);
        $this->belongsToMany('AccountingClerks', [
            'foreignKey' => 'recipient_id',
            'targetForeignKey' => 'accounting_clerk_id',
            'joinTable' => 'recipients_accounting_clerks',
        ]);
        $this->belongsToMany('RehabTypes', [
            'foreignKey' => 'recipient_id',
            'targetForeignKey' => 'rehab_type_id',
            'joinTable' => 'recipients_rehab_types',
        ]);
        $this->belongsToMany('SocialInsuranceProviders', [
            'foreignKey' => 'recipient_id',
            'targetForeignKey' => 'social_insurance_provider_id',
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
            ->scalar('recipient_title')
            ->maxLength('recipient_title', 10)
            ->allowEmptyString('recipient_title');

        $validator
            ->scalar('recipient_first_name')
            ->maxLength('recipient_first_name', 50)
            ->allowEmptyString('recipient_first_name');

        $validator
            ->scalar('recipient_last_name')
            ->maxLength('recipient_last_name', 50)
            ->allowEmptyString('recipient_last_name');

        $validator
            ->scalar('company_name')
            ->maxLength('company_name', 255)
            ->allowEmptyString('company_name');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 250)
            ->allowEmptyString('password');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 250)
            ->allowEmptyString('phone');

        $validator
            ->scalar('avatar_path')
            ->maxLength('avatar_path', 255)
            ->allowEmptyString('avatar_path');

        $validator
            ->integer('accounting_clerk_id')
            ->allowEmptyString('accounting_clerk_id');

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
        $rules->add($rules->existsIn(['accounting_clerk_id'], 'AccountingClerks'), ['errorField' => 'accounting_clerk_id']);
        $rules->add($rules->existsIn(['social_insurance_provider_id'], 'SocialInsuranceProviders'), ['errorField' => 'social_insurance_provider_id']);

        return $rules;
    }
}
