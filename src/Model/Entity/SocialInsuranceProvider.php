<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SocialInsuranceProvider Entity
 *
 * @property int $social_insurance_provider_id
 * @property string|null $social_insurance_provider_name
 * @property string|null $avatar_path
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\AccountingClerk[] $accounting_clerks
 * @property \App\Model\Entity\Recipient[] $recipients
 */
class SocialInsuranceProvider extends Entity
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
        'social_insurance_provider_name' => true,
        'avatar_path' => true,
        'created' => true,
        'modified' => true,
        'accounting_clerks' => true,
        'recipients' => true,
    ];
}
