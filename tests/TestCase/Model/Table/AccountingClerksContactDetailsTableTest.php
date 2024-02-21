<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccountingClerksContactDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccountingClerksContactDetailsTable Test Case
 */
class AccountingClerksContactDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AccountingClerksContactDetailsTable
     */
    protected $AccountingClerksContactDetails;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.AccountingClerksContactDetails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AccountingClerksContactDetails') ? [] : ['className' => AccountingClerksContactDetailsTable::class];
        $this->AccountingClerksContactDetails = $this->getTableLocator()->get('AccountingClerksContactDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AccountingClerksContactDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AccountingClerksContactDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
