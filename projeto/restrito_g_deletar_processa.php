<?php require("parte_topo.php"); ?>
<body>
	
	<div class="geral_painel">
		
		<?php
			require("conectar.php");
		
			$usu = $_POST["confirma"];
			if(mysql_query($sintaxe = "DELETE from cad_usuario WHERE cpf = '$usu'")){
				echo "<h4>Usuário(a) ".$usu." removido com sucesso!</h4>";
				echo "<a class='submit_cad' href='restrito_g_usu.php'>Continuar</a>";
			}
			else{
				echo "<h4>ERRO</h4>";
				echo "<a href='restrito_g_usu.php'>Voltar</a>";
			}
		?>
		
	</iframe>
		
</div>

