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

body{
    background-color: black;
}
.login {
    width: 500px;
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
    padding-bottom: 10px;
    letter-spacing: 10px;
    text-transform: uppercase;
    text-align: center;
    font-size: 23px;
}

.login p{
    margin: auto;
    padding:0;
    font-weight: bold;
    margin-top: 5px;
    width: auto;
}

.login input, select{
    width: 40%;
    margin-bottom: 21px;
}

.login input[type="text"], input[ type="number"], select {
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
    height: 25px;
    color: black;
    background: #fff;
    border-radius: 20px;
    transition: 0.2s;
    letter-spacing: 2px;
    font-weight: bold;
    font-size: 1rem;
    text-transform: uppercase; 
    display: block;
    left: 50%;
    position: absolute;
    transform: translate(-50%);
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
  border: none;
  border-bottom: 1px solid white;
  -webkit-text-fill-color: white;
  transition: background-color 5000s ease-in-out 0s;
}

#ak{
    font-size: 15px;
}

option{
    color: black;
    height: 20px;
}

select{
    border: rgb(150,50,52) 1px solid; 
    margin-top:5px ;
    
}

input[type="radio"]{
    width: 20% !important;
}
label{
    font-size: 15px;
    position: absolute;
}

.cambio{
    position: absolute;
    font-size: 16px;
    display: inline;
    margin-left: 20%;
    border:rgb(150,50,52) 1px solid ;
    width: 28%;
    padding: 10px;
    height: 13%;
}

#e{
    display: block;
}

#valor{
    width: 80%;
}
#si{
    width: 80%;
    margin-left: 10px;
}


    </style>
</head>
<body>

<?php
include 'conexao.php';
if(isset($_POST['go'])){
$marca = $_POST['marca'];
$cambio = $_POST['cambio'];
$modelo = $_POST['modelo'];
$categoria = $_POST['categoria'];
$valor = $_POST['valor'];
$ano = $_POST['ano'];
$fabricante = $_POST['fabricante'];
$placa = $_POST['placa'];
$renavam = $_POST['renavam'];
$cilindradas = $_POST['cilindradas'];
$combustivel = $_POST['combustivel'];
$foto = $_FILES['foto'];
$fototmp = $foto['tmp_name'];
$foto = $foto['name'];
move_uploaded_file($fototmp, 'images/' .$foto);

$sql = "INSERT INTO `carro`( `alugado`,`marca`, `categoria`, `cilindradas`, `fabricante`, `modelo`, `ano`, `cambio`, `combustivel`, `dataCompra`, `valor`, `placa`, `renavam`, `foto`) VALUES ('n','$marca','$categoria','$cilindradas','$fabricante', '$modelo','$ano','$cambio','$combustivel',NOW(),'$valor','$placa','$renavam','$foto')";

$cadastrar = mysqli_query($conexao,$sql);
header('Location: listarCarro.php');
}

?>


    <main></main>
    <div class="login">
        <h1>Cadastro de Carro</h1>
        <br>
        <form enctype="multipart/form-data" method="post">
            <p>Marca</p>
            <select required name="marca">
                <option value="Alfa Romeo">Alfa Romeo</option>
                <option value="Audi">Audi</option>
                <option value="BMW">BMW</option>
                <option value="Chery">Chery</option>
                <option value="Chevrolet GM">Chevrolet GM</option>
                <option value="Chrysler">Chrysler</option>
                <option value="Citroen">Citroen</option>
                <option value="Dodge">Dodge</option>
                <option value="Fiat">Fiat</option>
                <option value="Ford">Ford</option>
                <option value="Honda">Honda</option>
                <option value="Hyundai">Hyundai</option>
                <option value="Jac">Jac</option>
                <option value="Jaguar">Jaguar</option>
                <option value="Jeep">Jeep</option>
                <option value="Kia">Kia</option>
                <option value="Land Rover">Land Rover</option>
                <option value="Mercedes-Benz">Mercedes-Benz</option>
                <option value="Mini">Mini</option>
                <option value="Mitsubishi">Mitsubishi</option>
                <option value="Nissan">Nissan</option>
                <option value="Peugeot">Peugeot</option>
                <option value="Renault">Renault</option>
                <option value="Suzuki">Suzuki</option>
                <option value="Toyota">Toyota</option>
                <option value="Troller">Troller</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Volvo">Volvo</option>
            </select>
            <div class="cambio">
                <p>Cambio</p><br>
                <select id="si" required name="cambio" >
                <option value="automatico">Automático</option>
                <option value="manual">Manual</option>
            </select>
            </div>

            <p>Modelo</p>
            <input type="text" required placeholder="corolla" name="modelo">
            <p>Categoria</p>
            <select required name="categoria" >
                <option value="Subcompacto">Subcompacto</option>
                <option value="Hatch">Hatch</option>
                <option value="Sedan">Sedan</option>
                <option value="Crossover">Crossover</option>
                <option value="Minivan">Minivan</option>
                <option value="Picape">Picape</option>
            </select>
            <div class="cambio">
                <p>Valor</p>
                <br>
                <input id="valor" type="number" name="valor" placeholder="20000,00">
            </div>
            <p>Ano</p>
            <input type="number" name="ano" min="1900" max="2099" step="1" placeholder="2016" />
            <p>Fabricante</p>
            <input type="text" required placeholder="fabricante" name="fabricante" >
            <div class="cambio">
                <p>Placa</p>
                <br>
                <input id="valor" type="text" name="placa" placeholder="BRA2E19">
            </div>
            <p>Cod Renavam</p>
            <input type="number" name="renavam" min="00000000000" max="99999999999" step="1" placeholder="12345678912"/>
            <p>Cilindradas</p>
            <input type="number" name="cilindradas" min="1" max="50" step="1" placeholder="4"/>
            <div class="cambio">
                <p>Foto</p>
                <br>
                <input id="valor" type="file" name="foto" placeholder="BRA2E19">
            </div>
            <select id="e" required name="combustivel" >
                <option value="Gasolina comum">Gasolina comum</option>
                <option value="Gasolina aditivada">Gasolina aditivada</option>
                <option value="Gasolina premium">Gasolina premium</option>
                <option value="Gasolina formulada">Gasolina formulada</option>
                <option value="Etanol">Etanol</option>
                <option value="Etanol aditivado">Etanol aditivado</option>
                <option value="Picape">GNV</option>
                <option value="Diesel">Diesel</option>
            </select>
            <a href="home.php" id="ak">Voltar</a>
            <input type="submit" name="go">
        </form>
    </div>
    <script src="confirm.js"></script>
</body>
</html>