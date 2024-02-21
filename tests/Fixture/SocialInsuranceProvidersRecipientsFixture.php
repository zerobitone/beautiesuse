<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SocialInsuranceProvidersRecipientsFixture
 */
class SocialInsuranceProvidersRecipientsFixture extends TestFixture
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
                'social_insurance_provider_id' => 1,
                'recipient_id' => 1,
                'created' => '2024-02-21 10:19:54',
                'modified' => '2024-02-21 10:19:54',
            ],
        ];
        parent::init();
    }
}
