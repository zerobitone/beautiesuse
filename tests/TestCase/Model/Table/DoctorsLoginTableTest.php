<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DoctorsLoginTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DoctorsLoginTable Test Case
 */
class DoctorsLoginTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DoctorsLoginTable
     */
    protected $DoctorsLogin;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.DoctorsLogin',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DoctorsLogin') ? [] : ['className' => DoctorsLoginTable::class];
        $this->DoctorsLogin = $this->getTableLocator()->get('DoctorsLogin', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DoctorsLogin);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DoctorsLoginTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
