<?php require("parte_topo.php"); ?>
<body>
	
	<div class="geral_painel">
		
		<a href="restrito_g_usu.php" class="link_simples"><< Voltar</a>
		<table>
		<?php
			session_start();
			unset($_SESSION["usu_solicita"]);
			
			
			$cpf_usu = $_GET['cod'];
			require("conectar.php");
		
			$sintaxe = mysql_query("SELECT * from cad_usuario WHERE cpf = '$cpf_usu'");
			$dados = mysql_fetch_array($sintaxe);
			
			echo "	<tr><td><b>CPF</b></td><td>".$dados[1]."</td></tr>
					<tr><td><b>Nome</b></td><td>".$dados[2]."</td></tr>
					<tr><td><b>E-mail</b></td><td>".$dados[3]."</td></tr>
					<tr><td><b>Função</b></td><td>".$dados[5]."</td></tr>";
			
			
			$_SESSION["usu_solicita"] = $dados[1];
		
		?>
		</table><br /><br />
		<form method="POST" action="restrito_g_solicita_processa.php">
			<h4 id="h4_solici">Aceitar cadastro de <?php echo $dados[2]; ?> ?</h4>
			<a id="sim"><input type="radio" name="solicitacao" value="sim">Sim</a>
			<a id="nao"><input type="radio" name="solicitacao" value="nao">Não</a>
		
			<br /><br />
			<input type="submit" class="submit_cad" value="CONFIRMAR">
		</form>
	</div>

</body>
</html>

