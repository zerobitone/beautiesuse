<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RehabFacilitiesLoginTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RehabFacilitiesLoginTable Test Case
 */
class RehabFacilitiesLoginTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RehabFacilitiesLoginTable
     */
    protected $RehabFacilitiesLogin;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.RehabFacilitiesLogin',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RehabFacilitiesLogin') ? [] : ['className' => RehabFacilitiesLoginTable::class];
        $this->RehabFacilitiesLogin = $this->getTableLocator()->get('RehabFacilitiesLogin', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->RehabFacilitiesLogin);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RehabFacilitiesLoginTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
