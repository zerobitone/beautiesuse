<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RehabStaysTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RehabStaysTable Test Case
 */
class RehabStaysTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RehabStaysTable
     */
    protected $RehabStays;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.RehabStays',
        'app.Recipients',
        'app.SocialInsuranceProviders',
        'app.RehabFacilities',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RehabStays') ? [] : ['className' => RehabStaysTable::class];
        $this->RehabStays = $this->getTableLocator()->get('RehabStays', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->RehabStays);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RehabStaysTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RehabStaysTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
