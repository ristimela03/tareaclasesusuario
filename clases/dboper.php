<?php

abstract class DBOperations
{
    private  $host = "localhost";
    private  $db   = 'ecommerce';
    private  $user = 'root';
    private  $pass = '';
    private  $charset = 'utf8mb4';
    protected $query;
    protected $rows;
    private $conn;

    abstract protected function get($username,$password);
    // abstract protected function create();
    // abstract protected function edit();
    // abstract protected function delete();

    private function openConnection()
    {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        try {
            $pdo = new PDO($dsn, $this->user, $this->pass);

            $this->conn= $pdo;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    private function closeConnection(){
        $this->conn = null;
    }
    
    protected function executeQuery($params=[]) {
        $this->openConnection();
        $consulta = $this->conn->prepare($this->query);
        $consulta->execute($params);
        $filas = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $filas; 
    }
}
<?