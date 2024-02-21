<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RehabFacilitiesRegistrationFixture
 */
class RehabFacilitiesRegistrationFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'rehab_facilities_registration';
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
                'registration_date' => '2024-02-21 10:21:20',
                'created' => '2024-02-21 10:21:20',
                'modified' => '2024-02-21 10:21:20',
            ],
        ];
        parent::init();
    }
}
