<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class OrderMigration_102
 */
class OrderMigration_102 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('order', [
                'columns' => [
                    new Column(
                        'order_Id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'order_datetime',
                        [
                            'type' => Column::TYPE_DATETIME,
                            'size' => 1,
                            'after' => 'order_Id'
                        ]
                    ),
                    new Column(
                        'order_Price',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 10,
                            'after' => 'order_datetime'
                        ]
                    ),
                    new Column(
                        'order_Listing',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'size' => 255,
                            'after' => 'order_Price'
                        ]
                    ),
                    new Column(
                        'order_State',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'size' => 255,
                            'after' => 'order_Listing'
                        ]
                    ),
                    new Column(
                        'order_Date_Id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'order_State'
                        ]
                    ),
                    new Column(
                        'order_Table',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'size' => 10,
                            'after' => 'order_Date_Id'
                        ]
                    ),
                    new Column(
                        'order_owner',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'order_Table'
                        ]
                    ),
                    new Column(
                        'order_date',
                        [
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'order_owner'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('PRIMARY', ['order_Id'], 'PRIMARY')
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
