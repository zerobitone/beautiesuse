<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DoctorsRecipientsFixture
 */
class DoctorsRecipientsFixture extends TestFixture
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
                'doctor_id' => 1,
                'recipient_id' => 1,
                'referral_date' => '2024-02-21 10:28:49',
                'created' => '2024-02-21 10:28:49',
                'modified' => '2024-02-21 10:28:49',
            ],
        ];
        parent::init();
    }
}
