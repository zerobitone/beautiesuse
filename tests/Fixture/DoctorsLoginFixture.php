<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DoctorsLoginFixture
 */
class DoctorsLoginFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'doctors_login';
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
                'last_login' => '2024-02-21 10:25:06',
                'created' => '2024-02-21 10:25:06',
                'modified' => '2024-02-21 10:25:06',
            ],
        ];
        parent::init();
    }
}
