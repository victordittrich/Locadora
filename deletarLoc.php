<?php
    include 'conexao.php';
    $id = $_GET['id'];
    $idCarro = $_GET['carro'];
    $sql = "DELETE FROM `alugados` WHERE `id` = '$id'";
    $sql2 = "UPDATE carro SET alugado= 'n' WHERE id= '$idCarro'";
    $up = mysqli_query($conexao,$sql2);
    $deletar = mysqli_query($conexao,$sql);
    header('Location: listarAlugados.php');
    exit();
?>