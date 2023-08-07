<?php

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host     = 'btlf77tqiknwpx4yvuy0-mysql.services.clever-cloud.com';
        $this->db       = 'btlf77tqiknwpx4yvuy0';
        $this->user     = 'uxoocvk8odyh8gwx';
        $this->password = "3ZQGlIJCSRdRpkU7Rv9O";
        $this->charset  = 'utf8mb4';
    }

    function connect(){
    
        try{
            
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
}






?>