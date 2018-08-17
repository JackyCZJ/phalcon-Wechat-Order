<?php

class Order extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(column="order_Id", type="integer", length=11, nullable=false)
     */
    public $order_Id;

    /**
     *
     * @var string
     * @Column(column="order_date", type="string", nullable=true)
     */
    public $order_date;

    /**
     *
     * @var double
     * @Column(column="order_Price", type="double", length=10, nullable=true)
     */
    public $order_Price;

    /**
     *
     * @var string
     * @Column(column="order_Listing", type="string", length=255, nullable=true)
     */
    public $order_Listing;

    /**
     *
     * @var string
     * @Column(column="order_State", type="string", length=255, nullable=true)
     */
    public $order_State;

    /**
     *
     * @var integer
     * @Column(column="order_Date_Id", type="integer", length=11, nullable=true)
     */
    public $order_Date_Id;

    /**
     *
     * @var string
     * @Column(column="order_Table", type="string", length=10, nullable=true)
     */
    public $order_Table;

    /**
     *
     * @var string
     * @Column(column="order_owner", type="string", length=255, nullable=true)
     */
    public $order_owner;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("test");
        $this->setSource("order");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'order';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Order[]|Order|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Order|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
