<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoCARdora</title>
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
    width: auto;
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

h1 {
    margin: 0;
    padding-top:0;
    padding-left: 0;
    padding-bottom: 20px;
    letter-spacing: 8px;
    text-transform: uppercase;
    text-align: center;
    font-size: 22px;
    margin-bottom: 0px;
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
}

.bt:hover{
    background: rgb(245,131,134);
    transition: 0.2s;
    cursor: pointer;
    letter-spacing: 3px;
}


</style>
</head>
<body>
    <main></main>
    <div class="login">
        <img class="eu" src="
        <?php 
         session_start();
        if($_SESSION['cpf'] == "09720639946"){
            echo "images/larusso.jpg";                                                                                                                                                                                                                                           
        } else {
            echo "images/johnny.jpg";
        } ?>
        " height="200px" alt="">
        
        <h1 id="ttl">
        <?php
        
        if($_SESSION['cpf'] == "09720639946"){
            echo "ADMINISTRADOR";                                                                                                                                                                                                                                           
        } else {
            echo "FUNCIONÁRIO";
        }
        ?>
        </h1>
        <a href="sair.php"><button class="bt">LOGOUT</button></a>
        <a href="home.php"><button class="bt">VOLTAR</button></a>
        
    </div>
</body>
</html>