<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RehabFacility Entity
 *
 * @property int $facility_id
 * @property string|null $street_address_line1
 * @property string|null $street_address_line2
 * @property string|null $city
 * @property string|null $state_province
 * @property string|null $postal_code
 * @property string|null $country
 * @property string|null $avatar_path
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 * @property string|null $email
 * @property string|null $password
 * @property string|null $phone
 */
class RehabFacility extends Entity
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
        'street_address_line1' => true,
        'street_address_line2' => true,
        'city' => true,
        'state_province' => true,
        'postal_code' => true,
        'country' => true,
        'avatar_path' => true,
        'created' => true,
        'modified' => true,
        'email' => true,
        'password' => true,
        'phone' => true,
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
