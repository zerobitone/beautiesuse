<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RecipientsAccountingClerksFixture
 */
class RecipientsAccountingClerksFixture extends TestFixture
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
                'clerk_id' => 1,
                'created' => '2024-02-21 10:26:50',
                'modified' => '2024-02-21 10:26:50',
            ],
        ];
        parent::init();
    }
}
