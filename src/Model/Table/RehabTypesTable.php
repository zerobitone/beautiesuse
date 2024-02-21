<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RehabTypes Model
 *
 * @property \App\Model\Table\RecipientsTable&\Cake\ORM\Association\BelongsToMany $Recipients
 *
 * @method \App\Model\Entity\RehabType newEmptyEntity()
 * @method \App\Model\Entity\RehabType newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\RehabType> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RehabType get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\RehabType findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\RehabType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\RehabType> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\RehabType|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\RehabType saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\RehabType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabType>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RehabType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabType> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RehabType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabType>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RehabType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RehabType> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RehabTypesTable extends Table
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

        $this->setTable('rehab_types');
        $this->setDisplayField('type_id');
        $this->setPrimaryKey('type_id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Recipients', [
            'foreignKey' => 'rehab_type_id',
            'targetForeignKey' => 'recipient_id',
            'joinTable' => 'recipients_rehab_types',
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
            ->scalar('type_name')
            ->maxLength('type_name', 255)
            ->allowEmptyString('type_name');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        return $validator;
    }
}
