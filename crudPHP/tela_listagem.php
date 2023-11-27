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

    // Check if search results are present in the URL
    if (isset($_GET['searchResults'])) {
        // Decode the JSON-encoded search results
        $searchResults = json_decode(urldecode($_GET['searchResults']), true);

        // Use $searchResults as needed to display the search results
        // For example, you can assign it to $listaPessoas
        $listaPessoas = $searchResults;
    } else {
        // If no search results are present, proceed with the regular list
        $controllerPessoa = new PessoaController();
        $listaPessoas = $controllerPessoa->listarPessoas();
    }
?>

<div class="table-container">
    <form action="rota.php" method="get" class="search-form">
        <div class="search-bar-container">
            <input type="text" class="search-bar" name="search" placeholder="Search by name or email">
            <input type="hidden" name="op" value="pesquisar">
            <button type="submit" class="search-button">Pesquisar</button>
        </div>
    </form>

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
