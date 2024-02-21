<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AccountingClerksSocialInsuranceProvidersFixture
 */
class AccountingClerksSocialInsuranceProvidersFixture extends TestFixture
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
                'social_insurance_provider_id' => 1,
                'created' => '2024-02-21 10:24:25',
                'modified' => '2024-02-21 10:24:25',
            ],
        ];
        parent::init();
    }
}
