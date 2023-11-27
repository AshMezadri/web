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

    if (isset($_GET['searchResults'])) {
        $searchResults = json_decode(urldecode($_GET['searchResults']), true);
        $listaPessoas = $searchResults;
    } else {
        $controllerPessoa = new PessoaController();
        $listaPessoas = $controllerPessoa->listarPessoas();
    }
    ?>

    <div class="table-container">

        <form action="rota.php" method="get" class="search-bar-container">
            <input type="text" name="searchTerm" class="search-bar" placeholder="Pesquisar ID">
            <button type="submit" class="search-button">Pesquisar</button>
        </form>

        <table id="lista_usuarios">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Data</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaPessoas as $pessoa) : ?>
                    <tr>
                        <td><?= htmlspecialchars($pessoa['id']) ?></td>
                        <td><?= htmlspecialchars($pessoa['nome']) ?></td>
                        <td><?= htmlspecialchars($pessoa['email']) ?></td>
                        <td><?= htmlspecialchars($pessoa['telefone']) ?></td>
                        <td><?= htmlspecialchars($pessoa['data']) ?></td>
                        <td><a href='tela_editar.php?id=<?= $pessoa['id'] ?>' id="editar">Editar</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <button class="add-button" onclick="window.location.href='tela_cadastro.php'">Adicionar Usuário</button>
    </div>

</body>

</html>