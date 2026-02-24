<?php
class Database {
    private $host = "localhost";
    private $db_name = "crud_app";
    private $username = "cruduser";
    private $password = "mypassword";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        } catch (Exception $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->conn;
    }
}
?>
