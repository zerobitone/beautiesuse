<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecipientsContactDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecipientsContactDetailsTable Test Case
 */
class RecipientsContactDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RecipientsContactDetailsTable
     */
    protected $RecipientsContactDetails;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.RecipientsContactDetails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RecipientsContactDetails') ? [] : ['className' => RecipientsContactDetailsTable::class];
        $this->RecipientsContactDetails = $this->getTableLocator()->get('RecipientsContactDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->RecipientsContactDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RecipientsContactDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
