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
    <main><h1 id="txt">Funcionários</h1></main>

  
    <table class="table table-dark table-hover ">
            <thead>
                <tr>
                <th scope="col">CPF</th>
                <th scope="col">Usuário</th>
                <th scope="col">Senha</th>
                <th scope="col">Telefone</th>
                <th scope="col">Ações</th>

                </tr>
            </thead>

                    <?php

                    include 'conexao.php';
                    $sql = "SELECT * FROM `funcionario`";
                    $busca = mysqli_query($conexao,$sql);

                    while($array = mysqli_fetch_array($busca)){

                        $id = $array['id'];
                        $cpf = $array['cpf'];
                        $usuario = $array['usuario'];
                        $senha = $array['senha'];
                        $telefone = $array['telefone'];
                        
                    ?>
                <tr>
                    <td><?php echo $cpf ?></td>
                    <td><?php echo $usuario ?></td>
                    <td><?php echo $senha ?></td>
                    <td><?php echo $telefone ?></td>
                    
                    <td style="display: flex;"> 
                        
                        <a class="btn btn-warning btn-sm" style="color:#fff; margin-right: 5px; height:30px;" role="button" href="atualizarFunc.php?id=<?php echo $id ?>&user=<?php echo $usuario ?>">Editar</a> 
                        <a class="btn btn-danger btn-sm" style="color:#fff" role="button" href="deletarFunc.php?id=<?php echo $id ?>&user=<?php echo $usuario ?>">Deletar</a>
                
                    </td>
                </tr> 

                    <?php } ?> 
                    
        </table>
        <a  href="home.php" class="test"><button class="bt">VOLTAR</button></a>       
        <a  href="cadastrarFunc.php" class="test1"><button class="bt">NOVO FUNCIONÁRIO</button></a>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
</script>
</body>
</html>