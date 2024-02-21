<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\RecipientsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\RecipientsController Test Case
 *
 * @uses \App\Controller\RecipientsController
 */
class RecipientsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Recipients',
        'app.AccountingClerks',
        'app.SocialInsuranceProviders',
        'app.RecipientAddresses',
        'app.RecipientsContactDetails',
        'app.RehabStays',
        'app.Doctors',
        'app.RehabTypes',
        'app.RecipientsAccountingClerks',
        'app.SocialInsuranceProvidersRecipients',
        'app.DoctorsRecipients',
        'app.RecipientsRehabTypes',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\RecipientsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\RecipientsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\RecipientsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\RecipientsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\RecipientsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
