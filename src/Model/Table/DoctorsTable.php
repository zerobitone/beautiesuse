<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Doctors Model
 *
 * @property \App\Model\Table\RecipientsTable&\Cake\ORM\Association\BelongsToMany $Recipients
 *
 * @method \App\Model\Entity\Doctor newEmptyEntity()
 * @method \App\Model\Entity\Doctor newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Doctor> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Doctor get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Doctor findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Doctor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Doctor> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Doctor|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Doctor saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Doctor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Doctor>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Doctor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Doctor> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Doctor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Doctor>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Doctor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Doctor> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DoctorsTable extends Table
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

        $this->setTable('doctors');
        $this->setDisplayField('doctor_id');
        $this->setPrimaryKey('doctor_id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Recipients', [
            'foreignKey' => 'doctor_id',
            'targetForeignKey' => 'recipient_id',
            'joinTable' => 'doctors_recipients',
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
            ->scalar('doctor_lastname')
            ->maxLength('doctor_lastname', 255)
            ->allowEmptyString('doctor_lastname');

        $validator
            ->scalar('doctor_firstname')
            ->maxLength('doctor_firstname', 255)
            ->allowEmptyString('doctor_firstname');

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
