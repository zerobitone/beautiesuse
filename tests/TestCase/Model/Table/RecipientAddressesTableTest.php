<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecipientAddressesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecipientAddressesTable Test Case
 */
class RecipientAddressesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RecipientAddressesTable
     */
    protected $RecipientAddresses;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.RecipientAddresses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RecipientAddresses') ? [] : ['className' => RecipientAddressesTable::class];
        $this->RecipientAddresses = $this->getTableLocator()->get('RecipientAddresses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->RecipientAddresses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RecipientAddressesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
