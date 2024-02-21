<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RehabStaysTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RehabStaysTypesTable Test Case
 */
class RehabStaysTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RehabStaysTypesTable
     */
    protected $RehabStaysTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.RehabStaysTypes',
        'app.RehabStays',
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
        $config = $this->getTableLocator()->exists('RehabStaysTypes') ? [] : ['className' => RehabStaysTypesTable::class];
        $this->RehabStaysTypes = $this->getTableLocator()->get('RehabStaysTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->RehabStaysTypes);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RehabStaysTypesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
