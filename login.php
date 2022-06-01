<html>
    <body>
    <?php
		session_start();

        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];
		
		include 'conexao.php';

		// Evita caracteres epeciais (SQL Inject)
		$cpf = $conexao -> real_escape_string($_POST['cpf']);
		$senha = $conexao -> real_escape_string($_POST['senha']);
		
        //verifica o usuário no banco de dados.
		$sql = "SELECT * FROM `adm` WHERE `cpf` = '$cpf' AND `senha` = '$senha';";
		$sql2 = "SELECT * FROM `funcionario` WHERE `cpf` = '$cpf' AND `senha` = '$senha';";
		$res = $conexao->query($sql);
		$res2 = $conexao->query($sql2);

		if($res->num_rows != 0){
			$row = $res -> fetch_array();
			$_SESSION['cpf'] = $row[0];
			$conexao -> close();
			header('Location: home.php', true, 301);
			exit();
		}
		elseif ($res2->num_rows != 0) {
			$row = $res2 -> fetch_array();
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