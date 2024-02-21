<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccountingClerksTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccountingClerksTable Test Case
 */
class AccountingClerksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AccountingClerksTable
     */
    protected $AccountingClerks;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.AccountingClerks',
        'app.Recipients',
        'app.SocialInsuranceProviders',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AccountingClerks') ? [] : ['className' => AccountingClerksTable::class];
        $this->AccountingClerks = $this->getTableLocator()->get('AccountingClerks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AccountingClerks);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AccountingClerksTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
