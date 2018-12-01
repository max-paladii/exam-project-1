<?php
/**
 * Created by PhpStorm.
 * User: maxpaladii
 * Date: 01/12/2018
 * Time: 16.08
 */

abstract class BaseModel
{
    /** @var mysqli */
    protected $connection;

    private function getConnection()
    {
        $user = 'root';
        $password = 'root';
        $db = 'social';
        $host = 'localhost';
        $port = 8889;

        $mysqli = new mysqli($host, $user, $password, $db, $port);
        if ($mysqli->connect_errno) {
            echo "Не удалось подключиться к MySQL: " . $mysqli->connect_error;
        }
        return $mysqli;
    }
    public function __construct()
    {
        $this->connection = $this->getConnection();
    }
}