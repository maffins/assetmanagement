<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StolenTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StolenTable Test Case
 */
class StolenTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StolenTable
     */
    public $Stolen;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stolen',
        'app.assets',
        'app.users',
        'app.asset_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Stolen') ? [] : ['className' => 'App\Model\Table\StolenTable'];
        $this->Stolen = TableRegistry::get('Stolen', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Stolen);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
