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

    case "pesquisar":
        $pesquisa = $_REQUEST['search'];
        $pessoaController = new PessoaController();
        $listaPessoas = $pessoaController->pesquisarPessoas($pesquisa);

        header("Location: tela_listagem.php?resultadosPesquisa=" . urlencode(json_encode($listaPessoas)));
        exit();
        break;

    case "editar":
        $idToEdit = $_REQUEST['id'];
        header("Location: editar.php?id=$idToEdit");
        exit();
        break;

    default:
        echo "Operação inválida";
        header('Location: index.php');
        exit();
}
?>
