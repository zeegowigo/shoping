<?php
require_once "config.php";
class DB_Connect{
    private $conn;
    public function Connect()
    {
        $this->conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        return $this->conn;
    }

}