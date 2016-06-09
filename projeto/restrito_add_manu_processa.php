<?php require("parte_topo.php"); ?>
<body>
	
	<?php
		require("conectar.php");
		
		$cpf = $_POST["cpf"];
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$conf_email = $_POST["conf_email"];
		
	$sintaxe = mysql_query("SELECT * from cad_manutencao where cpf = '$cpf' or email = '$email'");
	
	//VERIFICANDO A EXISTÊNCIA DE OUTRAS ACC
	if(mysql_num_rows($sintaxe) == 0){
	
		//CONFIRMANDO EMAIL
		if($email == $conf_email){
			
			//STRLEN CPF
			if(strlen($cpf) == 11){
			
			//
			$senha = md5($cpf);	
			
				//REGISTRANDO NO BANCO DE DADOS
				if(mysql_query("INSERT INTO cad_manutencao(cpf, nome, email, senha)
							values ('$cpf','$nome','$email','$senha')")){
					
					echo "<br><h4>Manutencionista Cadastrado com sucesso!<h4>
						<br /><br />
						<a class='submit_cad' href='restrito_g_equipe.php'>Continuar</a>";
				}
				else{
					echo "<br><h4>Houve um erro no envio dos dados!</h4>
						<br /><br />
						<a class='submit_cad' href='restrito_add_manu.php'>Tente Novamente</a>";
				}
			}
			else{
				echo "<br><h4>O campo CPF deve conter 11 caracteres</h4>
				<br /><br />
				<a class='submit_cad' href='restrito_add_manu.php'>Voltar</a>";
			}
		}
		else{
			echo "<br><h4>Redigite seu e-mail da mesma forma nos campos necessários</h4>
				<br /><br />
				<a class='submit_cad' href='restrito_add_manu.php'>Voltar</a>";
		}
	}
	else{
		echo "<br><h4>O CPF ou E-mail já estão em uso! </h4>
			<br /><br />
			<a class='submit_cad' href='restrito_add_manu.php'>Voltar</a>";
	}
	
	?>
	

