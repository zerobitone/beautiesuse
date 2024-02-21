<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Recipient Entity
 *
 * @property int $id
 * @property string|null $recipient_title
 * @property string|null $recipient_first_name
 * @property string|null $recipient_last_name
 * @property string|null $company_name
 * @property string|null $email
 * @property string|null $password
 * @property string|null $phone
 * @property string|null $avatar_path
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 * @property int|null $accounting_clerk_id
 * @property int|null $social_insurance_provider_id
 *
 * @property \App\Model\Entity\AccountingClerk[] $accounting_clerks
 * @property \App\Model\Entity\SocialInsuranceProvider[] $social_insurance_providers
 * @property \App\Model\Entity\RecipientAddress[] $recipient_addresses
 * @property \App\Model\Entity\RecipientsContactDetail[] $recipients_contact_details
 * @property \App\Model\Entity\RehabStay[] $rehab_stays
 * @property \App\Model\Entity\Doctor[] $doctors
 * @property \App\Model\Entity\RehabType[] $rehab_types
 */
class Recipient extends Entity
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
        'recipient_title' => true,
        'recipient_first_name' => true,
        'recipient_last_name' => true,
        'company_name' => true,
        'email' => true,
        'password' => true,
        'phone' => true,
        'avatar_path' => true,
        'created' => true,
        'modified' => true,
        'accounting_clerk_id' => true,
        'social_insurance_provider_id' => true,
        'accounting_clerks' => true,
        'social_insurance_providers' => true,
        'recipient_addresses' => true,
        'recipients_contact_details' => true,
        'rehab_stays' => true,
        'doctors' => true,
        'rehab_types' => true,
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
