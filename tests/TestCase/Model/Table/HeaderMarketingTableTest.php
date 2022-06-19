<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HeaderMarketingTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HeaderMarketingTable Test Case
 */
class HeaderMarketingTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HeaderMarketingTable
     */
    public $HeaderMarketing;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.HeaderMarketing',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('HeaderMarketing') ? [] : ['className' => HeaderMarketingTable::class];
        $this->HeaderMarketing = TableRegistry::getTableLocator()->get('HeaderMarketing', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HeaderMarketing);

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
