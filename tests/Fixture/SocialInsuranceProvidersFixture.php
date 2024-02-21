<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SocialInsuranceProvidersFixture
 */
class SocialInsuranceProvidersFixture extends TestFixture
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
                'social_insurance_provider_name' => 'Lorem ipsum dolor sit amet',
                'avatar_path' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-02-21 10:18:45',
                'modified' => '2024-02-21 10:18:45',
            ],
        ];
        parent::init();
    }
}
