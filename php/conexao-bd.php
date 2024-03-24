<?php

class Database{
    private $driver;
    private $host;
    private $dbname;
    private $username;

    private $conn;

    function __construct(){
    $this->driver = "mysql";
    $this->host = "localhost";
    $this->dbname = "apenasumlogin";
    $this->username = "root";

    }

    function getConnection(){
        try {
            $this->conn = new PDO(
                "$this->driver: host=$this->host; dbname=$this->dbname",
                $this->username
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

            return $this->conn;

        } catch (Exception $e){
            ECHO $e->getMessage();
        }
    }
}
?>