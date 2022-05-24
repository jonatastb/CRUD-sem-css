<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body align="center">
    <h1>Cadastro</h1>
    <div>
        <form action="cadastro_cod.php" method="post">
            <label for="">Nome: <input type="text" name="nome" required></label>
            <br>
            <label for="">Email: <input type="email" name="email" required></label>
            <br>
            <input type="submit" value="Cadastrar">
            <br>
            <a href="index.php">Voltar</a>
        </form>
    </div>
</body>
</html>