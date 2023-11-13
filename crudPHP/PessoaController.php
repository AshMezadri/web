<?php

include_once "Pessoa.php";
include_once "PessoaDAO.php";

class PessoaController{
    public function __construct(){

    }

    public function cadastrarPessoa($nome, $email, $senha){
        $pessoa = new Pessoa();

        $pessoa->setAll(null,$nome,$email,$senha);
        $pessoaDAO = new PessoaDAO();

        return $pessoaDAO->insert($pessoa);
    }

    public function listarPessoas(){
        $pessoaDAO = new PessoaDAO();

        return $pessoaDAO->selectAll();
    }

    public function getPessoa($id){   
    }

    public function editarPessoa($id){
    }

    public function excluirPessoa($id){
    }

    public function autenticarPessoa($id){
    }
}

?>