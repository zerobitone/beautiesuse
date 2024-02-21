<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DoctorsRecipient Entity
 *
 * @property int $doctor_id
 * @property int $recipient_id
 * @property \Cake\I18n\DateTime|null $referral_date
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Doctor $doctor
 * @property \App\Model\Entity\Recipient $recipient
 */
class DoctorsRecipient extends Entity
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
        'referral_date' => true,
        'created' => true,
        'modified' => true,
        'doctor' => true,
        'recipient' => true,
    ];
}
