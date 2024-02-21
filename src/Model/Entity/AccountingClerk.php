<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AccountingClerk Entity
 *
 * @property int $clerk_id
 * @property string|null $clerk_lastname
 * @property string|null $clerk_firstname
 * @property string|null $email
 * @property string|null $password
 * @property string|null $phone
 * @property string|null $avatar_path
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Recipient[] $recipients
 * @property \App\Model\Entity\SocialInsuranceProvider[] $social_insurance_providers
 */
class AccountingClerk extends Entity
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
        'clerk_lastname' => true,
        'clerk_firstname' => true,
        'email' => true,
        'password' => true,
        'phone' => true,
        'avatar_path' => true,
        'created' => true,
        'modified' => true,
        'recipients' => true,
        'social_insurance_providers' => true,
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
