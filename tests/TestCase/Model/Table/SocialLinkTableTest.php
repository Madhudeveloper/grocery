<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SocialLinkTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SocialLinkTable Test Case
 */
class SocialLinkTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SocialLinkTable
     */
    public $SocialLink;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SocialLink',
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
        $config = TableRegistry::getTableLocator()->exists('SocialLink') ? [] : ['className' => SocialLinkTable::class];
        $this->SocialLink = TableRegistry::getTableLocator()->get('SocialLink', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SocialLink);

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
