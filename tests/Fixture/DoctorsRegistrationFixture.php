<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DoctorsRegistrationFixture
 */
class DoctorsRegistrationFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'doctors_registration';
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
                'registration_date' => '2024-02-21 10:25:42',
                'created' => '2024-02-21 10:25:42',
                'modified' => '2024-02-21 10:25:42',
            ],
        ];
        parent::init();
    }
}
