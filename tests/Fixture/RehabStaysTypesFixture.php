<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RehabStaysTypesFixture
 */
class RehabStaysTypesFixture extends TestFixture
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
                'type_id' => 1,
                'created' => '2024-02-21 10:22:23',
                'modified' => '2024-02-21 10:22:23',
            ],
        ];
        parent::init();
    }
}
