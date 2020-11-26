<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LaboratoryTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LaboratoryTable Test Case
 */
class LaboratoryTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LaboratoryTable
     */
    protected $Laboratory;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Laboratory',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Laboratory') ? [] : ['className' => LaboratoryTable::class];
        $this->Laboratory = $this->getTableLocator()->get('Laboratory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Laboratory);

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
