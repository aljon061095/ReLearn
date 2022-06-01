<?php
    class User {
        private $conn;
        private $db_table = "users";
        public $id;
        public $nickname;
        public $email;
        public $age;
        public $gender;
        public $grade;
        public $referral_code;
        public function __construct($db){
            $this->conn = $db;
        }
        
        // GET ALL users
        public function getUsers(){
            $sqlQuery = "SELECT * FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

        // Get single user
        public function getSingleUser(){
            $sqlQuery = "SELECT *
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       id = ?
                    LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->id);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->id = $dataRow['id'];
            $this->nickname = $dataRow['nickname'];
            $this->email = $dataRow['email'];
            $this->age = $dataRow['age'];
            $this->gender = $dataRow['gender'];
            $this->grade = $dataRow['grade'];
            $this->referral_code = $dataRow['referral_code'];
        }        
    }
?>