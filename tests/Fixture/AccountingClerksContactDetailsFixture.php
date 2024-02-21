<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AccountingClerksContactDetailsFixture
 */
class AccountingClerksContactDetailsFixture extends TestFixture
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
                'clerk_id' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-02-21 10:24:03',
                'modified' => '2024-02-21 10:24:03',
            ],
        ];
        parent::init();
    }
}
