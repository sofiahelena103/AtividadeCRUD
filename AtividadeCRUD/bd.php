<?php
class DB {
    private static $instance = null;
    private $conn;

    // Acesso ao banco de dados
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $name = 'atividadecrud';

    private function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->name);
        if ($this->conn->connect_error) {
            die("Conexão falhou: " . $this->conn->connect_error);
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>