<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserAddressesFixture
 */
class UserAddressesFixture extends TestFixture
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
                'user_id' => 1,
                'street_address_line1' => 'Lorem ipsum dolor sit amet',
                'street_address_line2' => 'Lorem ipsum dolor sit amet',
                'city' => 'Lorem ipsum dolor sit amet',
                'state_province' => 'Lorem ipsum dolor sit amet',
                'postal_code' => 'Lorem ipsum dolor ',
                'country' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-02-21 10:18:09',
                'modified' => '2024-02-21 10:18:09',
            ],
        ];
        parent::init();
    }
}
