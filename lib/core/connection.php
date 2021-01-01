<?php namespace Lib\Core;

use PDO;

class Connection
{
    public static function getConection()
    {
        $cn = new PDO(CONNECTION_STRING,SERVER_USER,SERVER_PASSWORD);
        return $cn;
    }
}