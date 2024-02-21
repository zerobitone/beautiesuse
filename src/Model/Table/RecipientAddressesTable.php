<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RecipientAddresses Model
 *
 * @method \App\Model\Entity\RecipientAddress newEmptyEntity()
 * @method \App\Model\Entity\RecipientAddress newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\RecipientAddress> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RecipientAddress get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\RecipientAddress findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\RecipientAddress patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\RecipientAddress> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\RecipientAddress|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\RecipientAddress saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\RecipientAddress>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RecipientAddress>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RecipientAddress>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RecipientAddress> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RecipientAddress>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RecipientAddress>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RecipientAddress>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RecipientAddress> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RecipientAddressesTable extends Table
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

        $this->setTable('recipient_addresses');
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
            ->scalar('street_address_line1')
            ->maxLength('street_address_line1', 255)
            ->allowEmptyString('street_address_line1');

        $validator
            ->scalar('street_address_line2')
            ->maxLength('street_address_line2', 255)
            ->allowEmptyString('street_address_line2');

        $validator
            ->scalar('city')
            ->maxLength('city', 100)
            ->allowEmptyString('city');

        $validator
            ->scalar('state_province')
            ->maxLength('state_province', 50)
            ->allowEmptyString('state_province');

        $validator
            ->scalar('postal_code')
            ->maxLength('postal_code', 20)
            ->allowEmptyString('postal_code');

        $validator
            ->scalar('country')
            ->maxLength('country', 100)
            ->allowEmptyString('country');

        return $validator;
    }
}
