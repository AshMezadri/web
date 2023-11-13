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

            $sql="INSERT INTO pessoa (nome, email, senha) VALUES (:nome, :email, :senha)";
            $stmt=$conn->prepare($sql);

            $nome=$pessoa->getNome();
            $email=$pessoa->getEmail();
            $senha=$pessoa->getSenha();

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            return $stmt->execute();
        }
        //update
        //delete
        //
    }

?>