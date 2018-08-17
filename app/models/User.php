<?php

class User extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(column="user_id", type="integer", length=11, nullable=false)
     */
    public $user_id;

    /**
     *
     * @var string
     * @Column(column="WeiXin_id", type="string", length=255, nullable=true)
     */
    public $weiXin_id;

    /**
     *
     * @var string
     * @Column(column="Registered_date", type="string", nullable=true)
     */
    public $registered_date;

    /**
     *
     * @var string
     * @Column(column="LastLogin_date", type="string", nullable=true)
     */
    public $lastLogin_date;

    /**
     *
     * @var integer
     * @Column(column="User_Integral", type="integer", length=255, nullable=true)
     */
    public $user_Integral;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("test");
        $this->setSource("user");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return User[]|User|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return User|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
