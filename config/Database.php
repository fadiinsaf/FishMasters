<?php
class Database{
    private static ?Database $instance = null;
    private PDO $conn;
    private function __construct(){
        $this->conn = new PDO(DB_TYPE, DB_USER, DB_PASS);
    }
    public static function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new Database();
        }
        return self::$instance;
    }
    public function getConnexion(){
        return $this->conn;
    }
    private function __clone(){}
}