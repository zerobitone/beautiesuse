<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SocialInsuranceProvidersContactDetailsFixture
 */
class SocialInsuranceProvidersContactDetailsFixture extends TestFixture
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
                'email' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-02-21 10:19:22',
                'modified' => '2024-02-21 10:19:22',
            ],
        ];
        parent::init();
    }
}
