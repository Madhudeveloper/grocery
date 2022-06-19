<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnquiriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnquiriesTable Test Case
 */
class EnquiriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EnquiriesTable
     */
    public $Enquiries;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Enquiries',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Enquiries') ? [] : ['className' => EnquiriesTable::class];
        $this->Enquiries = TableRegistry::getTableLocator()->get('Enquiries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Enquiries);

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
