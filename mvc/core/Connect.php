<?php
class Connection {
    private static $instance = null;
    private $conn; 

    private function __construct($config)
    {
        // Connection database 
        try {
            $dsn = "mysql:host=" . _HOST . ";dbname=" . _DB . ";charset=utf8";
            $options = [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];

            $this->conn = new PDO($dsn, _USER , _PASS , $options);
        } catch (PDOException $exc) {
            // Errors 
            echo "Errors connecting database: " . $exc->getMessage();
            die();
        }
    }

    public static function getInstance($config)
    {
        if (self::$instance == null)
        {
            self::$instance = new Connection($config);
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn; 
    }
}
?>