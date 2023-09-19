<?php 
class Database {
    public $conn;

    function __construct() {
        global $db_config;
        $this->conn = Connection::getInstance($db_config)->getConnection(); 
    }
}
?>