<?php
    $connect = new PDO("mysql:host=localhost; dbname=relearn", "root", "");

    class Database {
        //This config is intented for our actual database
        private $host = "13.213.60.83";
        private $port = 3306;
        private $database_name = "relearn";
        private $username = "relearnadmin";
        private $password = "gofleet0088";

        public $conn;
        public function getConnection(){
            $this->conn = null;
            try{
                $this->conn = new PDO("mysql:host=" . $this->host .";port=" . $this->port . ";dbname=" . $this->database_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            }catch(PDOException $exception){
                echo "Database could not be connected: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }  
?>