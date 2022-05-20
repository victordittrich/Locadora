<html>
    <body>
    <?php
		session_start();

        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];
		
		$user = "root";
		$password = "root";
		$database = "locadora";
		$hostname = "localhost";

		$conexao = new mysqli($hostname,$user,$password,$database);

		// Evita caracteres epeciais (SQL Inject)
		$cpf = $conexao -> real_escape_string($_POST['cpf']);
		$senha = $conexao -> real_escape_string($_POST['senha']);
				
        //verifica o usuário no banco de dados.
		$sql="SELECT `cpf` FROM `clientes` WHERE `cpf` = '".$cpf."' AND `senha` = '".$senha."';";
		$res = $conexao->query($sql);

		if($res->num_rows != 0){
			$row = $res -> fetch_array();
			$_SESSION['cpf'] = $row[0];
			$conexao -> close();
			header('Location: home.php', true, 301);
			exit();
		} else {
			$conexao -> close();
			header('Location: index.php', true, 301);
		}

    ?>

    </body>
</html>