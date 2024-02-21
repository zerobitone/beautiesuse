<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecipientsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecipientsTable Test Case
 */
class RecipientsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RecipientsTable
     */
    protected $Recipients;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Recipients',
        'app.AccountingClerks',
        'app.SocialInsuranceProviders',
        'app.RecipientAddresses',
        'app.RecipientsContactDetails',
        'app.RehabStays',
        'app.Doctors',
        'app.RehabTypes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Recipients') ? [] : ['className' => RecipientsTable::class];
        $this->Recipients = $this->getTableLocator()->get('Recipients', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Recipients);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RecipientsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RecipientsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
