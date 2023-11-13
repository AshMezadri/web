<?php
    class Database{
        private $host;
        private $user;
        private $password;
        private $database;
        private $connection;

        public function getConnection(){
            
            $this->user="root";
            $this->password="aluno";
            $this->database="crud";
            $this->host="localhost";
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->database",$this->user,$this->password);
            
            return $this->connection;
        }

    }

?>