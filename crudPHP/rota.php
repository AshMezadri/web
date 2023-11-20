<?php
include_once "Pessoa.php";
include_once "PessoaController.php";

if (!isset($_POST['op'])) {
    echo "Operação não informada op";
    header('Location: index.php');
    exit();
}

$op = $_POST['op'];

switch ($op) {
    case "cadastrar_usuario":
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $pessoaController = new PessoaController();
        $resultado = $pessoaController->cadastrarPessoa($nome, $email, $senha);

        if ($resultado) {
            header('Location: tela_listagem.php');
            exit();
        } else {
            echo "Falha no cadastro.";
        }
        break;

    case "login_usuario":
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $pessoaController = new PessoaController();
        $usuario = $pessoaController->autenticarPessoa($email, $senha);

        if ($usuario) {
            header('Location: tela_listagem.php');
            exit();
        } else {
            echo "Falha no login.";
        }
        break;

    default:
        echo "Operação inválida";
        header('Location: index.php');
        exit();
}
?>
