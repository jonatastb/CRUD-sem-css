<?php

include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

$sql_edit = "UPDATE `speed` SET `nome`='$nome',`email`='$email' WHERE `id` = $id;";

mysqli_query($conn, $sql_edit);
header('location: listar.php');

?>