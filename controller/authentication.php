<?php namespace Controller;

use \Lib\Core\Connection;

class Authentication
{
    private $cn;
    public function __construct()
    {
        $this->cn = Connection::getConection();
    }

    public function GetList()
    {
        echo var_dump($this->cn);
    }
}