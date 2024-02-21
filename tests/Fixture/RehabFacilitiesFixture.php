<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RehabFacilitiesFixture
 */
class RehabFacilitiesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'facility_id' => 1,
                'street_address_line1' => 'Lorem ipsum dolor sit amet',
                'street_address_line2' => 'Lorem ipsum dolor sit amet',
                'city' => 'Lorem ipsum dolor sit amet',
                'state_province' => 'Lorem ipsum dolor sit amet',
                'postal_code' => 'Lorem ipsum dolor ',
                'country' => 'Lorem ipsum dolor sit amet',
                'avatar_path' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-02-21 10:20:33',
                'modified' => '2024-02-21 10:20:33',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
