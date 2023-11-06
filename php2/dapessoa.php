<?php
    include_once "db.php";
    function cadastrarPessoa($nome,$email,$senha){
        $con=conectaDB();
        $sql="INSERT INTO usr(nome,email,senha) VALUE (:nome,:email,:senha);";
        $stmt ->bindParam(":nome",$nome);
        $stmt ->bindParam(":email",$email);
        $stmt ->bindParam(":senha",$senha);
    }
?>