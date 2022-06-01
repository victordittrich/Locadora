<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoCARdora</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <style>

main {
    background: url("images/bgcad.png") no-repeat center center;
    background-size: cover;
    height: 100vh;
  }

  *{
    margin: 0;
    font-family: sans-serif;
    padding: 0;
}

.login {
    width: 300px;
    height: auto;
    /*border: 2px solid #000;*/
    border-radius: 45px 45px 45px 45px;
    color: #fff;
    background-color: rgba(0, 0, 5, 0.880);
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 50px 28px;
    border: 2px solid white;
    text-align: center;
}

.table {
    width: auto;
    left: 50%;
    top: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    text-align: center;
    border-radius: 10px;
}

.fundo {
    height: 100vh;
    width: 100%;
    position:absolute;
}


.eu{
    border-radius: 50%;
    margin: 0;
    padding-top:0;
    padding-left: 0;
    padding-bottom: 20px;
}

.bt{
    border: none;
    outline: none;
    height: 30px;
    color: black;
    background: #fff;
    border-radius: 20px;
    transition: 0.2s;
    font-weight: bold;
    letter-spacing: 2px;
    font-size: 1rem;
    text-transform: uppercase;
    width: auto;
    padding-left:15px ;
    padding-right:15px ;    
    align-items: center;
    top: 100px;
}

.bt:hover{
    background: rgb(245,131,134);
    transition: 0.2s;
    cursor: pointer;
    letter-spacing: 3px;
}

#txt{
    color: #fff;
    font-weight: bold; 
    position: absolute;
    left: 50%;
    top: 30%;
    transform: translate(-50%);
    text-transform: uppercase;
    letter-spacing: 3px;
}

.test{
    position: absolute;
    left: 50%;
    top: 10%;
    transform: translate(-50%);
}

.test1{
    position: absolute;
    left: 50%;
    top: 15%;
    transform: translate(-50%);
}


</style>
</head>
<body>
    <main><h1 id="txt">Carros</h1></main>

  
    <table class="table table-dark table-hover ">
            <thead>
                <tr>
                <th scope="col">Foto</th>
                <th scope="col">Alugado</th>
                <th scope="col">Categoria</th>
                <th scope="col">Cilindradas</th>
                <th scope="col">Fabricante</th>
                <th scope="col">Modelo</th>
                <th scope="col">Ano</th>
                <th scope="col">Câmbio</th>
                <th scope="col">Combustível</th>
                <th scope="col">Data de compra</th>
                <th scope="col">Valor</th>
                <th scope="col">Placa</th>
                <th scope="col">Renavam</th>
                <th scope="col">Ação</th>
                </tr>
            </thead>

                    <?php

                    include 'conexao.php';
                    $sql = "SELECT * FROM `carro`";
                    $busca = mysqli_query($conexao,$sql);

                    while($array = mysqli_fetch_array($busca)){

                        $id = $array['id'];
                        $foto = $array['foto'];
                        $alugado = $array['alugado'];
                        $categoria = $array['categoria'];
                        $cilindradas = $array['cilindradas'];
                        $fabricante = $array['fabricante'];
                        $modelo = $array['modelo'];
                        $ano = $array['ano'];
                        $cambio = $array['cambio'];
                        $combustivel = $array['combustivel'];
                        $dataCompra = $array['dataCompra'];
                        $valor = $array['valor'];
                        $placa = $array['placa'];
                        $renavam = $array['renavam'];
                        
                    ?>
                <tr>
                    <td> <img style="width:150px" src="<?php echo "images/$foto" ?>"></td>
                    <td><?php echo $alugado ?></td>
                    <td><?php echo $categoria ?></td>
                    <td><?php echo $cilindradas ?></td>
                    <td><?php echo $fabricante ?></td>
                    <td><?php echo $modelo ?></td>
                    <td><?php echo $ano ?></td>
                    <td><?php echo $cambio ?></td>
                    <td><?php echo $combustivel ?></td>
                    <td><?php echo $dataCompra ?></td>
                    <td><?php echo $valor ?></td>
                    <td><?php echo $placa ?></td>
                    <td><?php echo $renavam ?></td>
                    <td > 
                        
                        <a class="btn btn-warning btn-sm" style="color:#fff" role="button" href="editar_carro.php?id=<?php echo $id  ?>">Editar</a> 
                        <a class="btn btn-danger btn-sm" style="color:#fff" role="button" href="deletarCarro.php?id=<?php echo $id ?>">Deletar</a>
                        <a class="btn btn-info btn-sm" style="color:#fff" role="button" href="alugar_carro.php?id=<?php echo $id ?>">Alugar</a>
                
                    </td>
                </tr> 

                    <?php } ?>
        </table>
        <a  href="home.php" class="test"><button class="bt">VOLTAR</button></a>       
        <a  href="addCar.php" class="test1"><button class="bt">NOVO CARRO</button></a>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
</script>
</body>
</html>