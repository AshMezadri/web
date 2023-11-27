<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    
<form action="rota.php" method="post" class="form">
        <h2>Login</h2>
        <div class="div">
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email" required>
        </div>
        <div class="div">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required>
        </div>
        <input type="text" name="op" value="editar_usuario" hidden>
        <button type="submit">Salvar</button>
    </form>

</body>
</html>