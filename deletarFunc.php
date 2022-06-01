<?php
    include 'conexao.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM `funcionario` WHERE `id` = '$id'";
    $deletar = mysqli_query($conexao,$sql);
    header('Location: listarFunc.php');
    exit();
?>