<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SocialInsuranceProvidersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SocialInsuranceProvidersTable Test Case
 */
class SocialInsuranceProvidersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SocialInsuranceProvidersTable
     */
    protected $SocialInsuranceProviders;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.SocialInsuranceProviders',
        'app.AccountingClerks',
        'app.Recipients',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SocialInsuranceProviders') ? [] : ['className' => SocialInsuranceProvidersTable::class];
        $this->SocialInsuranceProviders = $this->getTableLocator()->get('SocialInsuranceProviders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SocialInsuranceProviders);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SocialInsuranceProvidersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
