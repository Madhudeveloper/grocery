<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactPagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactPagesTable Test Case
 */
class ContactPagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactPagesTable
     */
    public $ContactPages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ContactPages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ContactPages') ? [] : ['className' => ContactPagesTable::class];
        $this->ContactPages = TableRegistry::getTableLocator()->get('ContactPages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContactPages);

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
