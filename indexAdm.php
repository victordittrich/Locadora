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
    width: 320px;
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
    margin-bottom: 10px;
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
.login input[type="text"], input[type="password"] {
    border: none;
    border-bottom: 1px solid white;
    background: transparent;
    outline: none;
    height: 40px;
    color: white;
    font-size: 16px;
    padding-left: 3px;
}

.login input[type="submit"]{
    border: none;
    outline: none;
    height: 35px;
    color: black;
    background: #fff;
    border-radius: 20px;
    transition: 0.2s;
    font-weight: bold;
    letter-spacing: 2px;
    font-size: 1rem;
    text-transform: uppercase;
}

.login input[type="submit"]:hover {
    background: rgb(245,131,134);
    transition: 0.2s;
    cursor: pointer;
    letter-spacing: 3px;
}

.login a{
    font-weight: bold;
    text-decoration: none;
    font-size: 16px;
    line-height: 20px;
    color: #4b4b4b;
    transition: 0.2s;
}

.login a:hover{
    transition: 0.2s;
    color: white;
}

.fundo {
    height: 100vh;
    width: 100%;
    position:absolute;
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
  border: 1px solid rgb(48,66,42);
  -webkit-text-fill-color: white;
  transition: background-color 5000s ease-in-out 0s;
}


</style>
</head>
<body>
    <main></main>
    <div class="login">

        <h1>Logar adm</h1>
        <br>
        <form method="post" action="login.php">
            <p>CPF</p>
            <input required="required" type="text" name="cpf" placeholder="cpf" pattern="(\d{3}\.?\d{3}\.?\d{3}-?\d{2})|(\d{2}\.?\d{3}\.?\d{3}/?\d{4}-?\d{2})">
            <p>Senha</p>
            <input required="required" type="password" name="senha" placeholder="password">
            <br>
            <input type="submit" value="Logar">
            <br>
            <br>
            <a href="indexFunc.php">Logar como funcionário</a>
        </form>
    </div>
</body>
</html>