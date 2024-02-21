<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SocialInsuranceProvidersRecipientsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SocialInsuranceProvidersRecipientsTable Test Case
 */
class SocialInsuranceProvidersRecipientsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SocialInsuranceProvidersRecipientsTable
     */
    protected $SocialInsuranceProvidersRecipients;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.SocialInsuranceProvidersRecipients',
        'app.SocialInsuranceProviders',
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
        $config = $this->getTableLocator()->exists('SocialInsuranceProvidersRecipients') ? [] : ['className' => SocialInsuranceProvidersRecipientsTable::class];
        $this->SocialInsuranceProvidersRecipients = $this->getTableLocator()->get('SocialInsuranceProvidersRecipients', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SocialInsuranceProvidersRecipients);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SocialInsuranceProvidersRecipientsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
