<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RecipientsContactDetailsFixture
 */
class RecipientsContactDetailsFixture extends TestFixture
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
                'recipient_id' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-02-21 10:27:18',
                'modified' => '2024-02-21 10:27:18',
            ],
        ];
        parent::init();
    }
}
