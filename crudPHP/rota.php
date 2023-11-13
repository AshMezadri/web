<?php

include_once "Pessoa.php";
include_once "PessoaController.php";

if(!isset($_POST['op'])){
    echo "Operação não informada op";
    header ('Location: index.php');
    exit();
}
$op = $_POST['op'];

switch ($op){

    case "cadastrar_usuario":

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $pessoaController = new PessoaController();

        $resultado = $pessoaController->cadastrarPessoa($nome, $email, $senha);

        echo $resultado;
        break;

}

?>