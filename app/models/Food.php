<?php

class Food extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="food_Id", type="integer", length=11, nullable=false)
     */
    public $food_Id;

    /**
     *
     * @var string
     * @Column(column="food_Name", type="string", length=255, nullable=true)
     */
    public $food_Name;

    /**
     *
     * @var double
     * @Column(column="food_Price", type="double", length=10, nullable=true)
     */
    public $food_Price;

    /**
     *
     * @var string
     * @Column(column="food_Url", type="string", length=255, nullable=true)
     */
    public $food_Url;

    /**
     *
     * @var string
     * @Column(column="food_Type", type="string", length=255, nullable=true)
     */
    public $food_Type;

    /**
     *
     * @var string
     * @Column(column="food_Statue", type="string", length=1, nullable=true)
     */
    public $food_Statue;

    /**
     *
     * @var integer
     * @Column(column="food_hasSales", type="integer", length=11, nullable=true)
     */
    public $food_hasSales;

    /**
     *
     * @var string
     * @Column(column="food_description", type="string", length=255, nullable=true)
     */
    public $food_description;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("test");
        $this->setSource("food");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'food';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Food[]|Food|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Food|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
