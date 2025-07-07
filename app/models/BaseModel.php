<?php
namespace App\Models;

use Core\Database;

class BaseModel {
    protected $db;
    public function __construct() {
        $this->db = (new Database())->getConnection();
    }
}
