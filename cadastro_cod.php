<?php
include 'conexao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];

$sql_cad = "INSERT INTO `speed`(`id`, `nome`, `email`) VALUES ('','{$nome}','{$email}')";

if (mysqli_query($conn, $sql_cad)) {
    header('location: index.php');
}else {
    echo 'Erro';
}