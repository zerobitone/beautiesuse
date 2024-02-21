<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SocialInsuranceProvidersContactDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SocialInsuranceProvidersContactDetailsTable Test Case
 */
class SocialInsuranceProvidersContactDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SocialInsuranceProvidersContactDetailsTable
     */
    protected $SocialInsuranceProvidersContactDetails;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.SocialInsuranceProvidersContactDetails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SocialInsuranceProvidersContactDetails') ? [] : ['className' => SocialInsuranceProvidersContactDetailsTable::class];
        $this->SocialInsuranceProvidersContactDetails = $this->getTableLocator()->get('SocialInsuranceProvidersContactDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SocialInsuranceProvidersContactDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SocialInsuranceProvidersContactDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
