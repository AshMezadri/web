<?php

include_once "Database.php";
include_once "PessoaController.php";

    class PessoaDAO{
        public function __construct(){

        }

        //insert
        public function insert(Pessoa $pessoa){
            $db = new Database();
            $conn = $db->getConnection();

            $sql="INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
            $stmt=$conn->prepare($sql);

            $nome=$pessoa->getNome();
            $email=$pessoa->getEmail();
            $senha=$pessoa->getSenha();

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            return $stmt->execute();
        }

        public function selectAll(){
            $db = new Database();
            $conn = $db->getConnection();

            $sql="SELECT * FROM usuarios";
            $stmt=$conn->prepare($sql);

            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


            return $result; 
        }
        //update
        //delete
        //
    }

?>