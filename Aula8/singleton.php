<?php

class Database
{
    public static $connection;

    private function __construct()
    {
        echo "Conexão realizada";
    }
    public static function Connect()
    {
        if (!isset(self::$connection))
        {
            echo "Passando por aqui <br>";
            self::$connection = new Database;
            return self::$connection;
        }else{
            return null;
        }
    }
    public function __clone()
    {
    }
    public function __unset($name)
    {
        self::$connection = null;
    }
    public function query($query)
    {
        echo $query;
    }
}

$client = Database::Connect();
$client->query('SELECT * FROM ...');

$client2 = Database::Connect();
$client2->query('SELECT * FROM ...');