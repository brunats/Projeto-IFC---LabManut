<?php require("parte_topo.php"); ?>
<body>
	<a href="restrito.php" class="link_simples"><< Voltar</a>
<?php
	
	if($_POST["login"] == "admin"){
	
		if($_POST["senha"]  == "admin"){
			header("location:restrito_painel.php");
		}
		else{
			echo "Senha incorreta!";
		}
		
	}
	else{
		echo "Login incorreto!";
	}

?>

<?php require("parte_rodape.php"); ?>	

