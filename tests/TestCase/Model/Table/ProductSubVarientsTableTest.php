<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductSubVarientsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductSubVarientsTable Test Case
 */
class ProductSubVarientsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductSubVarientsTable
     */
    public $ProductSubVarients;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ProductSubVarients',
        'app.ProductVarients',
        'app.ProductDetailVarients',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProductSubVarients') ? [] : ['className' => ProductSubVarientsTable::class];
        $this->ProductSubVarients = TableRegistry::getTableLocator()->get('ProductSubVarients', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductSubVarients);

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
