<?php
include_once "Pessoa.php";
include_once "PessoaController.php";

if (!isset($_REQUEST['op'])) {
    echo "Operação não informada op";
    header('Location: index.php');
    exit();
}

$op = $_REQUEST['op'];

switch ($op) {
    case "cadastrar_usuario":
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $data = $_POST['data'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $pessoaController = new PessoaController();
        $resultado = $pessoaController->cadastrarPessoa($nome, $email, $data, $telefone, $senha);

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

    case "pesquisar":
        $pesquisa = $_GET['pesquisa'];
        $pessoaController = new PessoaController();
        $listaPessoas = $pessoaController->pesquisarPessoas($pesquisa);

        header("Location: tela_listagem.php?resultadosPesquisa=" . urlencode(json_encode($listaPessoas)));
        exit();
        break;

    case "editar_usuario":
        $idEditar = $_POST['id'];
        $nomeEditar = $_POST['nome'];
        $emailEditar = $_POST['email'];
        $dataEditar = $_POST['data'];
        $telefoneEditar = $_POST['telefone'];
        $senhaEditar = $_POST['senha'];

        $pessoaController = new PessoaController();
        $resultado = $pessoaController->editarPessoa($idEditar, $nomeEditar, $emailEditar, $dataEditar,  $telefoneEditar, $senhaEditar);

        if ($resultado) {
            header('Location: tela_listagem.php');
            exit();
        } else {
            echo "Falha na edição.";
        }
        break;

    case "deletar":
        if (isset($_GET['id'])) {
            $userIdToDelete = $_GET['id'];

            $pessoaController = new PessoaController();
            $pessoaController->deletarPessoa($userIdToDelete);

            header("Location: tela_listagem.php");
            exit();
        }
        break;

    default:
        echo "Operação inválida";
        header('Location: index.php');
        exit();
}
