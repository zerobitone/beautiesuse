<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AccountingClerksSocialInsuranceProvider Entity
 *
 * @property int $clerk_id
 * @property int|null $social_insurance_provider_id
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\SocialInsuranceProvider $social_insurance_provider
 */
class AccountingClerksSocialInsuranceProvider extends Entity
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
        'social_insurance_provider_id' => true,
        'created' => true,
        'modified' => true,
        'social_insurance_provider' => true,
    ];
}
