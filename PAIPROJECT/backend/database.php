<?php

require_once "cfg/database_config.php";

class Database{
    private $username;
    private $password;
    private $host;
    private $database;

    private $conn;

    public function __construct()
    {
        $this->username = USERNAME;
        $this->password = "";
        $this->host = "127.0.0.1";
        $this->database = "pai";
    }

    public function connect()
    {
        try {
            $this->conn = new PDO(
                "mysql:host=$this->host;dbname=$this->database",
                $this->username,
                $this->password
            );

            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        }
        catch(PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function disconnect(){
        $this->conn=null;
    }

}
