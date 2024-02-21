<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RehabStay Entity
 *
 * @property int $stay_id
 * @property int|null $recipient_id
 * @property int|null $social_insurance_provider_id
 * @property int|null $facility_id
 * @property string|null $status
 * @property \Cake\I18n\Date|null $start_date
 * @property \Cake\I18n\Date|null $end_date
 * @property int|null $length_of_stay
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Recipient $recipient
 * @property \App\Model\Entity\SocialInsuranceProvider $social_insurance_provider
 * @property \App\Model\Entity\RehabFacility $rehab_facility
 */
class RehabStay extends Entity
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
        'recipient_id' => true,
        'social_insurance_provider_id' => true,
        'facility_id' => true,
        'status' => true,
        'start_date' => true,
        'end_date' => true,
        'length_of_stay' => true,
        'created' => true,
        'modified' => true,
        'recipient' => true,
        'social_insurance_provider' => true,
        'rehab_facility' => true,
    ];
}
