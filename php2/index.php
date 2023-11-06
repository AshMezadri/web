<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        html.body{
            height: 100vh;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            display: flex;
            justify-content: center;
            flex-direction: column;
            gap: 10px;
            border: 1px solid black;
            border-radius: 5%;
            padding: 30px;
        }
    </style>

</head>
<body>
    <form action="login.php">
        <label for="login">Login</label>
        <input type="text" name="login" id="login">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
    
        <input type="text" name="dado" id="dado">
        <input type="submit">
    </form>
</body>
</html>