<?php
include_once "PessoaDAO.php";
$pessoaDAO = new PessoaDAO();

if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $userData = $pessoaDAO->byId($userId);

    if ($userData) {
        $userId = $userData['id'];
        $userName = $userData['nome'];
        $userEmail = $userData['email'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleEditar.css">
    <title>Editar Usuário</title>
</head>

<body>

    <div class="container">

        <form id="dados_usuarios" action="rota.php" method="post" class="form">
            <h2>Editar Usuário</h2>

            <div class="div">
                <label for="id">Id:</label>
                <input type="text" name="id" id="id" placeholder="" value="<?= $userId; ?>" readonly>
            </div>

            <div class="div">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Nome" value="<?= $userName; ?>" required>
            </div>

            <div class="div">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" placeholder="Email" value="<?= $userEmail; ?>" required>
            </div>

            <div class="div">
                <label for="telefone">Telefone:</label>
                <input type="tel" name="telefone" id="telefone" value="<?= $userData['telefone'] ?>" required>
            </div>

            <div class="div">
                <label for="data">Data de aniversário:</label>
                <input type="date" name="data" id="data" value="<?= $userData['data']; ?>" required>
            </div>

            <div class="div">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" required>
            </div>

            <input type="text" name="op" value="editar_usuario" hidden>
            <button type="submit" class="salvar">Salvar</button>

            <button type="submit" class="excluir">Excluir</button>

        </form>
    </div>

</body>

</html>