<?php
    include 'conexao.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM `carro` WHERE `id` = '$id'";
    $deletar = mysqli_query($conexao,$sql);
    header('Location: listarCarro.php');
    exit();
?>