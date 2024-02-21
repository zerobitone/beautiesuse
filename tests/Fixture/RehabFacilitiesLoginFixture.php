<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RehabFacilitiesLoginFixture
 */
class RehabFacilitiesLoginFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'rehab_facilities_login';
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
                'last_login' => '2024-02-21 10:21:01',
                'created' => '2024-02-21 10:21:01',
                'modified' => '2024-02-21 10:21:01',
            ],
        ];
        parent::init();
    }
}
