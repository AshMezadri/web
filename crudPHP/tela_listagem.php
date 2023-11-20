<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleListagem.css">
    <title>Listagem</title>
</head>
<body>

<?php 
    include_once("PessoaController.php");
    include_once("Pessoa.php");

    $controllerPessoa = new PessoaController();
    $listaPessoas = $controllerPessoa->listarPessoas();
?>

<div class="table-container">
    <input type="text" class="search-bar" placeholder="Search by name or email">
    
    <table id="lista_usuarios">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaPessoas as $pessoa): ?>
                <tr>
                    <td><?= htmlspecialchars($pessoa['id']) ?></td>
                    <td><?= htmlspecialchars($pessoa['nome']) ?></td>
                    <td><?= htmlspecialchars($pessoa['email']) ?></td>
                    <td><a href='rota.php?op=editar_usuario&id=<?= $pessoa['id'] ?>' id="editar">Editar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <button class="add-button" onclick="window.location.href='cadastro.php'">Adicionar Usuário</button>
</div>

</body>
</html>