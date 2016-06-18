<?php
namespace App\Test\TestCase\Controller;

use App\Controller\StolenController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\StolenController Test Case
 */
class StolenControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stolen',
        'app.assets',
        'app.users',
        'app.user_types',
        'app.assets_types',
        'app.audit_trails',
        'app.cash_flows',
        'app.drivers',
        'app.maintenances',
        'app.vehicles',
        'app.dealers',
        'app.reciepts',
        'app.receipts',
        'app.sales',
        'app.asset_types'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
