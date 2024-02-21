<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AccountingClerksContactDetails Model
 *
 * @method \App\Model\Entity\AccountingClerksContactDetail newEmptyEntity()
 * @method \App\Model\Entity\AccountingClerksContactDetail newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\AccountingClerksContactDetail> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AccountingClerksContactDetail get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\AccountingClerksContactDetail findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\AccountingClerksContactDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\AccountingClerksContactDetail> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AccountingClerksContactDetail|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\AccountingClerksContactDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\AccountingClerksContactDetail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountingClerksContactDetail>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AccountingClerksContactDetail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountingClerksContactDetail> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AccountingClerksContactDetail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountingClerksContactDetail>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AccountingClerksContactDetail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountingClerksContactDetail> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AccountingClerksContactDetailsTable extends Table
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

        $this->setTable('accounting_clerks_contact_details');
        $this->setDisplayField('clerk_id');
        $this->setPrimaryKey('clerk_id');

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
