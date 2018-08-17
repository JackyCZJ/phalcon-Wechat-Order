<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class FoodMigration_103
 */
class FoodMigration_103 extends Migration
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
                        'food_Id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'food_Name',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'size' => 255,
                            'after' => 'food_Id'
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
                    ),
                    new Column(
                        'food_hasSales',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'default' => "0",
                            'size' => 11,
                            'after' => 'food_Statue'
                        ]
                    ),
                    new Column(
                        'food_description',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'food_hasSales'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('PRIMARY', ['food_Id'], 'PRIMARY')
                ],
                'options' => [
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '34',
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
