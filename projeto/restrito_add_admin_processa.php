<?php require("parte_topo.php"); ?>
<body>
	
	<?php
		require("conectar.php");
		
		$login = $_POST["login"];
		$nome = $_POST["nome"];
		$senha = $_POST["senha"];
		$confsenha = $_POST["confsenha"];
		
	$sintaxe = mysql_query("SELECT * from cad_admin where login = '$login'");
	
	//VERIFICANDO A EXISTÊNCIA DE OUTRAS ACC
	if(mysql_num_rows($sintaxe) == 0){
	
		//CONFIRMANDO SENHA
		if($senha == $confsenha){
			
			//STRLEN LOGIN
			if(strlen($login) >= 5 && strlen($login) <= 15){
				
				//REGISTRANDO NO BANCO DE DADOS
				if(mysql_query("INSERT INTO cad_admin(nome, login, senha)
							values ('$nome','$login','$senha')")){
					
					echo "<br><h4>Administrador Cadastro com sucesso!<h4>
						<br /><br />
						<a class='submit_cad' href='restrito_g_equipe.php'>Continuar</a>";
				}
				else{
					echo "<br><h4>Houve um erro no envio dos dados!</h4>
						<br /><br />
						<a class='submit_cad' href='restrito_add_admin.php'>Tente Novamente</a>";
				}
			}
			else{
				echo "<br><h4>O login deve conter de 5 a 15 caracteres</h4>
				<br /><br />
				<a class='submit_cad' href='restrito_add_admin.php'>Voltar</a>";
			}
		}
		else{
			echo "<br><h4>Redigite sua senha da mesma forma nos campos necessários</h4>
				<br /><br />
				<a class='submit_cad' href='restrito_add_admin.php'>Voltar</a>";
		}
	}
	else{
		echo "<br><h4>Login em uso! </h4>
			<br /><br />
			<a class='submit_cad' href='restrito_add_admin.php'>Voltar</a>";
	}
	
	?>
	

