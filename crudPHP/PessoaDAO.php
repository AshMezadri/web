<?php
include_once "Database.php";
include_once "Pessoa.php";
class PessoaDAO
{

    public function __construct()
    {
    }

    //insert
    public function insert(Pessoa &$pessoa)
    {
        $db = new Database();
        $conn = $db->getConnection();
        $sql = "INSERT INTO usuarios (nome, email, data, telefone, senha) VALUES (:nome, :email, :data, :telefone, :senha)";
        $stmt = $conn->prepare($sql);
        $nome = $pessoa->getNome();
        $email = $pessoa->getEmail();
        $data = $pessoa->getData();
        $telefone = $pessoa->getTelefone();
        $senha = $pessoa->getSenha();

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':data', $data);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':senha', $senha);

        return $stmt->execute();
    }
    //update
    public function update($id, $nome, $email, $data, $telefone, $senha)
    {
        $db = new Database();
        $conn = $db->getConnection();
        $sql = "UPDATE usuarios SET nome = :nome, email = :email, data = :data, telefone = :telefone, senha = :senha WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':data', $data);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':senha', $senha);

        $stmt->execute();
        return $stmt->rowCount();
    }

    //delete
    public function delete($id)
    {
        $db = new Database();
        $conn = $db->getConnection();
        $sql = "DELETE FROM usuarios WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    //select all
    public function selectAll()
    {
        $db = new Database();
        $conn = $db->getConnection();
        $sql = "SELECT * FROM usuarios";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //select by id
    public function byId($id)
    {
        $db = new Database();
        $conn = $db->getConnection();
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function autenticar($email, $senha)
    {
        $db = new Database();
        $conn = $db->getConnection();

        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        return $usuario;
    }

    public function pesquisarPorId($id)
    {
        $db = new Database();
        $conn = $db->getConnection();
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
}
