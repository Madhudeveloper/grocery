<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AboutPagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AboutPagesTable Test Case
 */
class AboutPagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AboutPagesTable
     */
    public $AboutPages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AboutPages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AboutPages') ? [] : ['className' => AboutPagesTable::class];
        $this->AboutPages = TableRegistry::getTableLocator()->get('AboutPages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AboutPages);

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
