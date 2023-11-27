<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>Cadastro</title>
</head>
<body>

<form action="rota.php" method="post" class="form">
    <h2>Cadastro</h2>
    <div class="div">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
    </div>
    <div class="div">
        <label for="email">E-mail:</label>
        <input type="text" name="email" id="email" required>
    </div>
    <div class="div">
        <label for="data">Data de Aniversário:</label>
        <input type="date" name="data" id="data" required>
    </div>
    <div class="div">
        <label for="telefone">Telefone:</label>
        <input type="tel" name="telefone" id="telefone" required>
    </div>
    <div class="div">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
    </div>
    <input type="text" name="op" value="cadastrar_usuario" hidden>
    <button type="submit">Cadastrar</button>
</form>

</body>
</html>
