<?php
class Database {
    private static $instance = null;
    private $conn = null;
    
    private function __construct() {}
    
    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new self;
            self::$instance->connect();
        }
        return self::$instance;
    }
    
    private function connect() {
        if(!isset($this->conn))
            $this->conn = mysqli_connect("mysql.rackhost.hu","c13343eplanner","tacoskft2019","c13343easyplanner");
        return $this->conn;
    }
    
    private function escape($tag) {
        return $this->conn->real_escape_string($tag);
    }

    public function makeQuery($query_string) {
        if($this->conn)
            return $this->conn->query($query_string);
    }
    
    public function getLastId() {
      return $this->conn->insert_id;
    }
}