<?php
include_once "Pessoa.php";
include_once "PessoaDAO.php";

class PessoaController
{

    public function __construct()
    {
    }

    public function cadastrarPessoa($nome, $email, $data, $telefone, $senha)
    {
        $pessoa = new Pessoa();
        $pessoa->setAll(null, $nome, $email, $data, $telefone, $senha);
        $pessoaDAO = new PessoaDAO();
        return $pessoaDAO->insert($pessoa);
    }

    public function listarPessoas()
    {
        $pessoaDAO = new PessoaDAO();
        return $pessoaDAO->selectAll();
    }

    public function getPessoa($id)
    {
        $pessoaDAO = new PessoaDAO();

        $usuario = $this->$pessoaDAO->byId($id);

        if ($usuario) {
            return $usuario;
        } else {
            return null;
        }
    }

    public function editarPessoa($id, $nome, $email, $data, $telefone, $senha)
    {
        $pessoaDAO = new PessoaDAO();
        return $pessoaDAO->update($id, $nome, $email, $data, $telefone, $senha);
    }


    public function deletarPessoa($userId)
    {
        $pessoaDAO = new PessoaDAO();
        $pessoaDAO->delete($userId);
    }

    public function autenticarPessoa($email, $senha)
    {
        $pessoaDAO = new PessoaDAO();
        $usuario = $pessoaDAO->autenticar($email, $senha);

        return $usuario;
    }

    public function pesquisarPessoa($id)
    {
        $pessoaDAO = new PessoaDAO();
        return $pessoaDAO->pesquisarPorId($id);
    }
}
