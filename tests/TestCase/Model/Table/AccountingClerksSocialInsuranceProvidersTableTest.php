<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccountingClerksSocialInsuranceProvidersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccountingClerksSocialInsuranceProvidersTable Test Case
 */
class AccountingClerksSocialInsuranceProvidersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AccountingClerksSocialInsuranceProvidersTable
     */
    protected $AccountingClerksSocialInsuranceProviders;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.AccountingClerksSocialInsuranceProviders',
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
        $config = $this->getTableLocator()->exists('AccountingClerksSocialInsuranceProviders') ? [] : ['className' => AccountingClerksSocialInsuranceProvidersTable::class];
        $this->AccountingClerksSocialInsuranceProviders = $this->getTableLocator()->get('AccountingClerksSocialInsuranceProviders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AccountingClerksSocialInsuranceProviders);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AccountingClerksSocialInsuranceProvidersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AccountingClerksSocialInsuranceProvidersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
