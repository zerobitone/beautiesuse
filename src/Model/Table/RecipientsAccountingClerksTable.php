<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RecipientsAccountingClerks Model
 *
 * @property \App\Model\Table\AccountingClerksTable&\Cake\ORM\Association\BelongsTo $AccountingClerks
 *
 * @method \App\Model\Entity\RecipientsAccountingClerk newEmptyEntity()
 * @method \App\Model\Entity\RecipientsAccountingClerk newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\RecipientsAccountingClerk> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RecipientsAccountingClerk get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\RecipientsAccountingClerk findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\RecipientsAccountingClerk patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\RecipientsAccountingClerk> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\RecipientsAccountingClerk|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\RecipientsAccountingClerk saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\RecipientsAccountingClerk>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RecipientsAccountingClerk>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RecipientsAccountingClerk>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RecipientsAccountingClerk> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RecipientsAccountingClerk>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RecipientsAccountingClerk>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RecipientsAccountingClerk>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RecipientsAccountingClerk> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RecipientsAccountingClerksTable extends Table
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

        $this->setTable('recipients_accounting_clerks');
        $this->setDisplayField('recipient_id');
        $this->setPrimaryKey('recipient_id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('AccountingClerks', [
            'foreignKey' => 'clerk_id',
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
            ->integer('clerk_id')
            ->allowEmptyString('clerk_id');

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
        $rules->add($rules->existsIn(['clerk_id'], 'AccountingClerks'), ['errorField' => 'clerk_id']);

        return $rules;
    }
}
