<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoCARdora | Cadastro </title>
    <style>

    *{
        margin: 0;
        font-family: sans-serif;
        padding: 0;
}

.login {
    width: 320px;
    border: 2px solid white;
    border-radius: 45px 45px 45px 45px;
    color: #fff;
    background-color: rgba(0, 0, 5, 0.9);
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 30px 28px;
    height: auto;
}

h1 {
    margin: 0;
    padding-top:0;
    padding-left: 0;
    padding-bottom: 20px;
    letter-spacing: 10px;
    text-transform: uppercase;
    text-align: center;
    font-size: 25px;
}

.login p{
    margin: 0;
    padding:0;
    font-weight: bold;
}

.login input{
    width: 100%;
    margin-bottom: 21px;
}

.login input[type="text"], input[type="password"], input[ type="number"] {
    border: none;
    border-bottom: 1px solid rgb(150,50,52);
    background: transparent;
    outline: none;
    height: 40px;
    color: white;
    font-size: 14px;
    padding-left: 3px;
}

.login input[type="submit"] {
    border: none;
    outline: none;
    height: 35px;
    color: black;
    background: #fff;
    border-radius: 20px;
    transition: 0.2s;
    letter-spacing: 2px;
    font-weight: bold;
    font-size: 1rem;
    text-transform: uppercase;
}

.login input[type="submit"]:hover {
    background: rgb(150,50,52);
    transition: 0.2s;
    cursor: pointer;
    letter-spacing: 3px;
}

.login a{
    font-weight: bold;
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: #4b4b4b;
    transition: 0.2s;
}

.login a:hover{
    transition: 0.2s;
    color: white;
}

main {
    background: url("images/bgcad.png") no-repeat center center;
    background-size: cover;
    height: 100vh;
  }

  input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus,
select:-webkit-autofill,
select:-webkit-autofill:hover,
select:-webkit-autofill:focus {
  border: 1px solid rgb(150,50,52);
  -webkit-text-fill-color: white;
  transition: background-color 5000s ease-in-out 0s;
}

#ak{
    font-size: 13px;
}

    </style>
</head>
<body>
<?php

    include 'conexao.php';
    
    if(isset($_POST['acao'])){
    $cpf = $_POST['cpf'];
    $usuario = $_POST['usuario'];
    $cnh = $_POST['cnh'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $sql = "INSERT INTO `clientes`(`cpf`, `telefone`, `usuario`, `cnh`, `cep`) VALUES ('$cpf','$telefone','$usuario','$cnh', '$cep')";
    $cadastrar = mysqli_query($conexao,$sql);
	header('Location: home.php');
	exit();
}
?>
    <main></main>
    <div class="login">
        <h1>Cadastro de Cliente</h1>
        <br>
        <form method="post">
            <p>CPF</p>
            <input type="text" required="required" placeholder="CPF" name="cpf" pattern="(\d{3}\.?\d{3}\.?\d{3}-?\d{2})|(\d{2}\.?\d{3}\.?\d{3}/?\d{4}-?\d{2})">
            <p>Usuário</p>
            <input required="required" type="text" name="usuario" placeholder="username">
            <p>Telefone</p>
            <input required="required" type="text" name="telefone" placeholder="telefone">
            <p>CNH</p>
            <input required="required" type="number" name="cnh" placeholder="46245...">
            <p>CEP</p>
            <input required="required" type="number" name="cep" placeholder="88304150">
            <input type="submit" value="Cadastrar" name="acao" >
            <br>
            <a href="home.php" id="ak">Voltar</a>
        </form>
    </div>
</body>
</html>