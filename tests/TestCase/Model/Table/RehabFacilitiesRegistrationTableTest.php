<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RehabFacilitiesRegistrationTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RehabFacilitiesRegistrationTable Test Case
 */
class RehabFacilitiesRegistrationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RehabFacilitiesRegistrationTable
     */
    protected $RehabFacilitiesRegistration;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.RehabFacilitiesRegistration',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RehabFacilitiesRegistration') ? [] : ['className' => RehabFacilitiesRegistrationTable::class];
        $this->RehabFacilitiesRegistration = $this->getTableLocator()->get('RehabFacilitiesRegistration', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->RehabFacilitiesRegistration);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RehabFacilitiesRegistrationTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
