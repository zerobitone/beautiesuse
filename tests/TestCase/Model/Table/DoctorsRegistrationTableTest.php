<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DoctorsRegistrationTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DoctorsRegistrationTable Test Case
 */
class DoctorsRegistrationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DoctorsRegistrationTable
     */
    protected $DoctorsRegistration;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.DoctorsRegistration',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DoctorsRegistration') ? [] : ['className' => DoctorsRegistrationTable::class];
        $this->DoctorsRegistration = $this->getTableLocator()->get('DoctorsRegistration', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DoctorsRegistration);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DoctorsRegistrationTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
