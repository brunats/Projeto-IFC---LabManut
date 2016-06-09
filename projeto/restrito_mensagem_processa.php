<?php require("parte_topo.php"); ?>
<body>
<?php
	$mensagem = $_POST["mensagem"];
	require("conectar.php");

	if(strlen($mensagem) >= 10 && strlen($mensagem) <= 300){
		$sintaxe = "INSERT into mensagem(descricao, emissor, receptor) 
		values ('$mensagem','00','00')";
		if(mysql_query($sintaxe)){
			header("location:restrito_mensagens.php");
		}
	}
?>	
</body>
</html>
