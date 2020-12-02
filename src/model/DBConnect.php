<?php


namespace APP\model;

use PDO;
class DBConnect
{
    public $dsn;
    public $username;
    public $password;

    public function __construct()
    {
        $this->dsn="mysql:local=localhost;dbname=bookstore";
        $this->username="root";
        $this->password="123456@Abc";
    }

    public function connect()
    {
        $connect=new PDO( $this->dsn,$this->username,$this->password);
        return $connect;
    }
}