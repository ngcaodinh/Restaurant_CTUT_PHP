<?php
namespace Core;

class Database {
    private $conn;
    private $config;

    public function __construct() {
        $this->config = require __DIR__ . '/../config/database.php';
    }

    public function getConnection() {
        if ($this->conn === null) {
            try {
                $this->conn = new \PDO(
                    "mysql:host=" . $this->config['host'] . ";dbname=" . $this->config['db_name'],
                    $this->config['username'],
                    $this->config['password']
                );
                $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                die("Connection error: " . $e->getMessage());
            }
        }
        return $this->conn;
    }
}
