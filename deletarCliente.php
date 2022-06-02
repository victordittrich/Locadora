<?php
    include 'conexao.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM `clientes` WHERE `id` = '$id'";
    $deletar = mysqli_query($conexao,$sql);
    header('Location: listarClientes.php');
    exit();
?>