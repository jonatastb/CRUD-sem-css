<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body align="center">
    <h1>Editar dados</h1>
    <div>
        <form action="editar_cod.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="">Nome: <input type="text" name="nome" value="<?php echo $nome; ?>" required></label>
            <br>
            <label for="">Email: <input type="email" name="email" value="<?php echo $email; ?>" required></label>
            <br>
            <input type="submit" value="Editar">
            <br>
            <a href="index.php">Voltar</a>
        </form>
    </div>
</body>
</html>