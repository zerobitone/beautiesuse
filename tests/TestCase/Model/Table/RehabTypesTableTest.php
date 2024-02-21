<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RehabTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RehabTypesTable Test Case
 */
class RehabTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RehabTypesTable
     */
    protected $RehabTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.RehabTypes',
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
        $config = $this->getTableLocator()->exists('RehabTypes') ? [] : ['className' => RehabTypesTable::class];
        $this->RehabTypes = $this->getTableLocator()->get('RehabTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->RehabTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RehabTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
