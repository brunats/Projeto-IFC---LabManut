<?php require("parte_topo.php"); ?>
<body>
	
	<?php
		require("conectar.php");
		
		$cpf = $_POST["cpf"];
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$conf_email = $_POST["conf_email"];
		$categoria = $_POST["categoria"];
		
	$sintaxe = mysql_query("SELECT * from cad_usuario where cpf = '$cpf' or email = '$email'");
	
	if(mysql_num_rows($sintaxe) == 0){
	
		if($email == $conf_email){
			if(mysql_query("INSERT INTO cad_usuario(cpf, nome, email, senha, categoria_usuario, cad_status)
						values ('$cpf','$nome','$email','$cpf','$categoria','aguardando')")){
				echo "<br><h4>Solicitação enviada com sucesso!<h4>
					<br /><br />
					<a class='submit_cad' href='index.php'>Continuar</a>";
			}
			else{
				echo "<br><h4>Houve um erro no envio dos dados!</h4>
					<br /><br />
					<a class='submit_cad' href='solicita_cad.php'>Tente Novamente</a>";
			}
		}
		else{
			echo "<br><h4>Redigite seu e-mail da mesma forma nos campos necessários</h4>
				<br /><br />
				<a class='submit_cad' href='solicita_cad.php'>Voltar</a>";
		}
	}
	else{
		echo "<br><h4>O CPF ou E-mail já estão em uso! </h4>
			<br /><br />
			<a class='submit_cad' href='solicita_cad.php'>Voltar</a>";
	}
	
	?>
	

<?php require("parte_rodape.php"); ?>	

