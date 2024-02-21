<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\SocialInsuranceProvidersRecipientsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\SocialInsuranceProvidersRecipientsController Test Case
 *
 * @uses \App\Controller\SocialInsuranceProvidersRecipientsController
 */
class SocialInsuranceProvidersRecipientsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.SocialInsuranceProvidersRecipients',
        'app.SocialInsuranceProviders',
        'app.Recipients',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\SocialInsuranceProvidersRecipientsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\SocialInsuranceProvidersRecipientsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\SocialInsuranceProvidersRecipientsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\SocialInsuranceProvidersRecipientsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\SocialInsuranceProvidersRecipientsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
