<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\SocialInsuranceProvidersController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\SocialInsuranceProvidersController Test Case
 *
 * @uses \App\Controller\SocialInsuranceProvidersController
 */
class SocialInsuranceProvidersControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.SocialInsuranceProviders',
        'app.AccountingClerks',
        'app.Recipients',
        'app.AccountingClerksSocialInsuranceProviders',
        'app.SocialInsuranceProvidersRecipients',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\SocialInsuranceProvidersController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\SocialInsuranceProvidersController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\SocialInsuranceProvidersController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\SocialInsuranceProvidersController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\SocialInsuranceProvidersController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
