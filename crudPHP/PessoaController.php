<?php
include_once "Pessoa.php";
include_once "PessoaDAO.php";

class PessoaController {
    
    public function __construct() {
    }

    public function cadastrarPessoa($nome, $email, $senha) {
        $pessoa = new Pessoa();
        $pessoa->setAll(null, $nome, $email, $senha);
        $pessoaDAO = new PessoaDAO();
        return $pessoaDAO->insert($pessoa);
    }

    public function listarPessoas() {    
        $pessoaDAO = new PessoaDAO();
        return $pessoaDAO->selectAll();
    }

    public function getPessoa($id) {
        $pessoaDAO = new PessoaDAO();

        $usuario = $this->$pessoaDAO->byId($id);

        if ($usuario) {
            return $usuario;
        } else {
            return null;
        }
    }

    public function editarPessoa($id) {
        $pessoaData = $this->getPessoa($id);
    }

    public function excluirPessoa($id) { 
        $pessoaDAO = new PessoaDAO();

        $isDeleted = $this->$pessoaDAO->delete($id);
    }

    public function autenticarPessoa($email, $senha) {
        $pessoaDAO = new PessoaDAO();
        $usuario = $pessoaDAO->autenticar($email, $senha);

        return $usuario;
    }
}
?>
