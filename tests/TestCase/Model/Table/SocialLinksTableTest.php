<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SocialLinksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SocialLinksTable Test Case
 */
class SocialLinksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SocialLinksTable
     */
    public $SocialLinks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SocialLinks',
        'app.Emails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SocialLinks') ? [] : ['className' => SocialLinksTable::class];
        $this->SocialLinks = TableRegistry::getTableLocator()->get('SocialLinks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SocialLinks);

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
