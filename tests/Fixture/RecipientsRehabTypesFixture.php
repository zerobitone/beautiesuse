<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RecipientsRehabTypesFixture
 */
class RecipientsRehabTypesFixture extends TestFixture
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
                'type_id' => 1,
                'created' => '2024-02-21 10:27:59',
                'modified' => '2024-02-21 10:27:59',
            ],
        ];
        parent::init();
    }
}
