<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class FoodMigration_100
 */
class FoodMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('food', [
                'columns' => [
                    new Column(
                        'food_Name',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'size' => 255,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'food_Price',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 10,
                            'after' => 'food_Name'
                        ]
                    ),
                    new Column(
                        'food_Url',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'size' => 255,
                            'after' => 'food_Price'
                        ]
                    ),
                    new Column(
                        'food_Type',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'size' => 255,
                            'after' => 'food_Url'
                        ]
                    ),
                    new Column(
                        'food_Statue',
                        [
                            'type' => Column::TYPE_BOOLEAN,
                            'default' => "b'0'",
                            'size' => 1,
                            'after' => 'food_Type'
                        ]
                    )
                ],
                'options' => [
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '',
                    'ENGINE' => 'InnoDB',
                    'TABLE_COLLATION' => 'utf8_unicode_ci'
                ],
            ]
        );
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {

    }

}
