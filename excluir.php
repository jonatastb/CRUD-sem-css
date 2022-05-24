<?php

include 'conexao.php';

$id = $_POST['id'];

$sql_excluir = "DELETE FROM `speed` WHERE `id`=  $id;";

mysqli_query($conn, $sql_excluir);

header('location: listar.php');

?>