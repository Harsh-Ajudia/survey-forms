<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersonalDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersonalDetailsTable Test Case
 */
class PersonalDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PersonalDetailsTable
     */
    protected $PersonalDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PersonalDetails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PersonalDetails') ? [] : ['className' => PersonalDetailsTable::class];
        $this->PersonalDetails = $this->getTableLocator()->get('PersonalDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PersonalDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
