<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HomebannersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HomebannersTable Test Case
 */
class HomebannersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HomebannersTable
     */
    public $Homebanners;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Homebanners',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Homebanners') ? [] : ['className' => HomebannersTable::class];
        $this->Homebanners = TableRegistry::getTableLocator()->get('Homebanners', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Homebanners);

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
