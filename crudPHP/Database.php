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
            $this->host="localhost";
            $this->database="aula";
            $this->connection = new PDO ("mysql: host=$host;dbname=$database", $user, $password);
            
            return $this -> connection;
        }

    }

?>