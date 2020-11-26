<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TeachingLearningTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TeachingLearningTable Test Case
 */
class TeachingLearningTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TeachingLearningTable
     */
    protected $TeachingLearning;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.TeachingLearning',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TeachingLearning') ? [] : ['className' => TeachingLearningTable::class];
        $this->TeachingLearning = $this->getTableLocator()->get('TeachingLearning', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TeachingLearning);

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
