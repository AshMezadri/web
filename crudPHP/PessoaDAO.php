<?php
    class PessoaDAO{
        public function __construct(){

        }

        //insert
        public function insert(Pessoa $pessoa){
            $dao = new Database();
            $conn = $dao->getConnection();

            $sql="INSERT INTO pessoa (nome, email, senha) VALUES (:nome, :email, :senha)";
            $stmt=$conn->prepare($sql);
            $stmt->bindParam(':nome',$pessoa->getNome());
            $stmt->bindParam(':email',$pessoa->getEmail());
            $stmt->bindParam(':senha',$pessoa->getSenha());
            return $stmt->execute();
        }
        //update
        //delete
        //
    }

?>