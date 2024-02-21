<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RehabFacilitiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RehabFacilitiesTable Test Case
 */
class RehabFacilitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RehabFacilitiesTable
     */
    protected $RehabFacilities;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
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
        $config = $this->getTableLocator()->exists('RehabFacilities') ? [] : ['className' => RehabFacilitiesTable::class];
        $this->RehabFacilities = $this->getTableLocator()->get('RehabFacilities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->RehabFacilities);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RehabFacilitiesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
