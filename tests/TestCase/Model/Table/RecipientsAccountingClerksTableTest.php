<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecipientsAccountingClerksTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecipientsAccountingClerksTable Test Case
 */
class RecipientsAccountingClerksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RecipientsAccountingClerksTable
     */
    protected $RecipientsAccountingClerks;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.RecipientsAccountingClerks',
        'app.AccountingClerks',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RecipientsAccountingClerks') ? [] : ['className' => RecipientsAccountingClerksTable::class];
        $this->RecipientsAccountingClerks = $this->getTableLocator()->get('RecipientsAccountingClerks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->RecipientsAccountingClerks);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RecipientsAccountingClerksTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RecipientsAccountingClerksTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
