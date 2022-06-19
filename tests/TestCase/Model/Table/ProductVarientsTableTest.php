<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductVarientsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductVarientsTable Test Case
 */
class ProductVarientsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductVarientsTable
     */
    public $ProductVarients;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ProductVarients',
        'app.ProductDetailVarients',
        'app.ProductSubVarients',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProductVarients') ? [] : ['className' => ProductVarientsTable::class];
        $this->ProductVarients = TableRegistry::getTableLocator()->get('ProductVarients', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductVarients);

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
