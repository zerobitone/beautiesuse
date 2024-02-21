<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RecipientsContactDetails Model
 *
 * @method \App\Model\Entity\RecipientsContactDetail newEmptyEntity()
 * @method \App\Model\Entity\RecipientsContactDetail newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\RecipientsContactDetail> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RecipientsContactDetail get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\RecipientsContactDetail findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\RecipientsContactDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\RecipientsContactDetail> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\RecipientsContactDetail|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\RecipientsContactDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\RecipientsContactDetail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RecipientsContactDetail>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RecipientsContactDetail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RecipientsContactDetail> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RecipientsContactDetail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RecipientsContactDetail>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RecipientsContactDetail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RecipientsContactDetail> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RecipientsContactDetailsTable extends Table
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

        $this->setTable('recipients_contact_details');
        $this->setDisplayField('recipient_id');
        $this->setPrimaryKey('recipient_id');

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
