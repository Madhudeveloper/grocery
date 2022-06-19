<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubbannersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubbannersTable Test Case
 */
class SubbannersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubbannersTable
     */
    public $Subbanners;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Subbanners',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Subbanners') ? [] : ['className' => SubbannersTable::class];
        $this->Subbanners = TableRegistry::getTableLocator()->get('Subbanners', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Subbanners);

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
