<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RehabStaysFixture
 */
class RehabStaysFixture extends TestFixture
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
                'stay_id' => 1,
                'recipient_id' => 1,
                'social_insurance_provider_id' => 1,
                'facility_id' => 1,
                'status' => 'Lorem ipsum dolor sit amet',
                'start_date' => '2024-02-21',
                'end_date' => '2024-02-21',
                'length_of_stay' => 1,
                'created' => '2024-02-21 10:21:43',
                'modified' => '2024-02-21 10:21:43',
            ],
        ];
        parent::init();
    }
}
