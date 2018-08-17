<?php

class Admin extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(column="admin_username", type="string", length=11, nullable=false)
     */
    public $admin_username;

    /**
     *
     * @var string
     * @Column(column="WeiXin_ID", type="string", length=255, nullable=true)
     */
    public $weiXin_ID;

    /**
     *
     * @var integer
     * @Column(column="admin_Rate", type="integer", length=10, nullable=true)
     */
    public $admin_Rate;

    /**
     *
     * @var string
     * @Column(column="admin_Password", type="string", length=255, nullable=true)
     */
    public $admin_Password;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("test");
        $this->setSource("admin");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'admin';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Admin[]|Admin|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Admin|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
