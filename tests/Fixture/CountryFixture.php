<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CountryFixture
 */
class CountryFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'country';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'country_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'iso_code_2' => ['type' => 'string', 'length' => 2, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'iso_code_3' => ['type' => 'string', 'length' => 3, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'latitude' => ['type' => 'decimal', 'length' => 10, 'precision' => 6, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'longitude' => ['type' => 'decimal', 'length' => 10, 'precision' => 6, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['country_id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'country_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'iso_code_2' => 'Lo',
                'iso_code_3' => 'L',
                'status' => 1,
                'latitude' => 1.5,
                'longitude' => 1.5,
            ],
        ];
        parent::init();
    }
}
