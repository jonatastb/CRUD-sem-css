<?php

include 'conexao.php';

$sql_list = "SELECT * FROM `speed`";

$list = mysqli_query($conn, $sql_list);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body align="center">
    <h1>Listar Cadastros</h1>
    <div>
        <table border=1px black solid align="center">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>NOME</td>
                    <td>EMAIL</td>
                    <td>EXCLUIR</td>
                    <td>EDITAR</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while ($listar_cad = mysqli_fetch_array($list)) {
                        $id = $listar_cad['id'];
                        $nome = $listar_cad['nome'];
                        $email = $listar_cad['email'];
                        ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $nome; ?></td>
                            <td><?php echo $email; ?></td>
                            <td>
                                <form action="excluir.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <input type="submit" value="EXCLUIR">
                                </form>
                            </td>
                            <td>
                                <form action="editar.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <input type="hidden" name="nome" value="<?php echo $nome; ?>">
                                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                                    <input type="submit" value="EDITAR">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
            </tbody>
        </table>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>
