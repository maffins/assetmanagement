<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OtherAssetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OtherAssetsTable Test Case
 */
class OtherAssetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OtherAssetsTable
     */
    public $OtherAssets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.other_assets'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OtherAssets') ? [] : ['className' => 'App\Model\Table\OtherAssetsTable'];
        $this->OtherAssets = TableRegistry::get('OtherAssets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OtherAssets);

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
}
