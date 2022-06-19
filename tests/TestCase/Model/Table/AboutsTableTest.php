<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AboutsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AboutsTable Test Case
 */
class AboutsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AboutsTable
     */
    public $Abouts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Abouts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Abouts') ? [] : ['className' => AboutsTable::class];
        $this->Abouts = TableRegistry::getTableLocator()->get('Abouts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Abouts);

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
