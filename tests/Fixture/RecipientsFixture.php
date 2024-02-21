<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RecipientsFixture
 */
class RecipientsFixture extends TestFixture
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
                'recipient_title' => 'Lorem ip',
                'recipient_first_name' => 'Lorem ipsum dolor sit amet',
                'recipient_last_name' => 'Lorem ipsum dolor sit amet',
                'company_name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit amet',
                'avatar_path' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-02-21 10:26:19',
                'modified' => '2024-02-21 10:26:19',
                'accounting_clerk_id' => 1,
                'social_insurance_provider_id' => 1,
            ],
        ];
        parent::init();
    }
}
