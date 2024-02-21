<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AccountingClerks Model
 *
 * @property \App\Model\Table\RecipientsTable&\Cake\ORM\Association\HasMany $Recipients
 * @property \App\Model\Table\SocialInsuranceProvidersTable&\Cake\ORM\Association\BelongsToMany $SocialInsuranceProviders
 * @property \App\Model\Table\RecipientsTable&\Cake\ORM\Association\BelongsToMany $Recipients
 *
 * @method \App\Model\Entity\AccountingClerk newEmptyEntity()
 * @method \App\Model\Entity\AccountingClerk newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\AccountingClerk> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AccountingClerk get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\AccountingClerk findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\AccountingClerk patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\AccountingClerk> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AccountingClerk|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\AccountingClerk saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\AccountingClerk>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountingClerk>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AccountingClerk>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountingClerk> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AccountingClerk>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountingClerk>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AccountingClerk>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountingClerk> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AccountingClerksTable extends Table
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

        $this->setTable('accounting_clerks');
        $this->setDisplayField('clerk_id');
        $this->setPrimaryKey('clerk_id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Recipients', [
            'foreignKey' => 'accounting_clerk_id',
        ]);
        $this->belongsToMany('SocialInsuranceProviders', [
            'foreignKey' => 'accounting_clerk_id',
            'targetForeignKey' => 'social_insurance_provider_id',
            'joinTable' => 'accounting_clerks_social_insurance_providers',
        ]);
        $this->belongsToMany('Recipients', [
            'foreignKey' => 'accounting_clerk_id',
            'targetForeignKey' => 'recipient_id',
            'joinTable' => 'recipients_accounting_clerks',
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
            ->scalar('clerk_lastname')
            ->maxLength('clerk_lastname', 255)
            ->allowEmptyString('clerk_lastname');

        $validator
            ->scalar('clerk_firstname')
            ->maxLength('clerk_firstname', 255)
            ->allowEmptyString('clerk_firstname');

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

        return $validator;
    }
}
