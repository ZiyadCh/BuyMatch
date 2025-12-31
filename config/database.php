<?php
session_start();

abstract class connection{
    private $host = "localhost";
    private $user = "coachuser";
    private $password = "strongpassword";
    private $db = "matche";
    private $pdo;

    protected function connect(){
        try {
                    try {
            $dsn = "mysql:host=$this->host;dbname=$this->db;charset=utf8mb4";
           $this->pdo = new PDO($dsn, $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } catch (PDOException $e) {
            error_log("Database connection error: " . $e->getMessage());
            throw new Exception("Database connection failed");
        }
        } catch (\Throwable $th) {
                        error_log("Database connection error: " . $e->getMessage());
            throw new Exception("Database connection failed");
 
        }
    }

  
}

?>
