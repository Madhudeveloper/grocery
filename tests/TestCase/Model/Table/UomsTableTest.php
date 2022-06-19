<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UomsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UomsTable Test Case
 */
class UomsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UomsTable
     */
    public $Uoms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Uoms',
        'app.ProductVariants',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Uoms') ? [] : ['className' => UomsTable::class];
        $this->Uoms = TableRegistry::getTableLocator()->get('Uoms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Uoms);

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
