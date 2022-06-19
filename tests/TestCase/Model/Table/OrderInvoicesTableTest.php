<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderInvoicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderInvoicesTable Test Case
 */
class OrderInvoicesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderInvoicesTable
     */
    public $OrderInvoices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OrderInvoices',
        'app.Orders',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OrderInvoices') ? [] : ['className' => OrderInvoicesTable::class];
        $this->OrderInvoices = TableRegistry::getTableLocator()->get('OrderInvoices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrderInvoices);

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
