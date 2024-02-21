<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecipientsRehabTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecipientsRehabTypesTable Test Case
 */
class RecipientsRehabTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RecipientsRehabTypesTable
     */
    protected $RecipientsRehabTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.RecipientsRehabTypes',
        'app.Recipients',
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
        $config = $this->getTableLocator()->exists('RecipientsRehabTypes') ? [] : ['className' => RecipientsRehabTypesTable::class];
        $this->RecipientsRehabTypes = $this->getTableLocator()->get('RecipientsRehabTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->RecipientsRehabTypes);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RecipientsRehabTypesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
