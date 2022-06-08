<?php 
include 'conexao.php';

$idCarro = $_GET['carro'];
$idCliente = $_GET['cliente'];
if(isset($idCarro) and isset($idCliente)){
    $sql = "INSERT INTO `alugados`(`idCliente`, `idCarro`, `dataLoc`) VALUES ('$idCliente','$idCarro',NOW())";
    $sql2 = "UPDATE `carro` SET `alugado`= 's' WHERE `id`= '$idCarro'";
    $locar = mysqli_query($conexao,$sql);
    $up = mysqli_query($conexao,$sql2);
    header('Location: listarAlugados.php');
}

?> 