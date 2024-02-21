<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Doctor Entity
 *
 * @property int $doctor_id
 * @property string|null $doctor_lastname
 * @property string|null $doctor_firstname
 * @property string|null $email
 * @property string|null $password
 * @property string|null $phone
 * @property string|null $avatar_path
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Recipient[] $recipients
 */
class Doctor extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'doctor_lastname' => true,
        'doctor_firstname' => true,
        'email' => true,
        'password' => true,
        'phone' => true,
        'avatar_path' => true,
        'created' => true,
        'modified' => true,
        'recipients' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected array $_hidden = [
        'password',
    ];
}
