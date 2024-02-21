<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AccountingClerksFixture
 */
class AccountingClerksFixture extends TestFixture
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
                'clerk_lastname' => 'Lorem ipsum dolor sit amet',
                'clerk_firstname' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit amet',
                'avatar_path' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-02-21 10:23:14',
                'modified' => '2024-02-21 10:23:14',
            ],
        ];
        parent::init();
    }
}
