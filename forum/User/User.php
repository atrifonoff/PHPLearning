<?php

/**
 * Created by PhpStorm.
 * User: angel
 * Date: 20.06.17
 * Time: 15:21
 */
class User
{
        private static $lastid;

        private $id;
        private $username;
        private $password;

    /**
     * User constructor.
     * @param $username
     * @param $password
     */
    public function __construct($username, $password)
    {
        $this->setUsername($username);
        $this->setPassword($password);
        $this ->id = ++self::$lastid;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        if(!preg_match("/[0-9]+/",$password)){
            throw new Exception('Password should contain digits');
        }
        if(!preg_match("/[a-z]+/",$password)){
            throw new Exception('Password should contain letters');
        }
        $this->password = $password;
    }


}