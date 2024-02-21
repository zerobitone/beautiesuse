<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'id' => 1,
                'user_lastname' => 'Lorem ipsum dolor sit amet',
                'user_firstname' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit amet',
                'avatar_path' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-02-21 10:15:35',
                'modified' => '2024-02-21 10:15:35',
            ],
        ];
        parent::init();
    }
}
