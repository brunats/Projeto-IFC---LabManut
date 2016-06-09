<?php require("parte_topo.php"); ?>
<body>
	
	<div class="geral_painel">
	<br>
	<a class="submit_cad" href="restrito_g_usu.php">Voltar</a>
	<div class="org_busca">
		
		<table>
		
	<?php
		$busca = $_POST["pesquisa"];
	
		require("conectar.php");
	
	
		$sintaxe = mysql_query("SELECT cpf, nome FROM cad_usuario WHERE nome LIKE '%".$busca."%'");
		
		while($dados = mysql_fetch_array($sintaxe)){
			echo "<tr><td class='resultados_pesq'><b>CPF</b> ".$dados[0]."<br> <b>Nome</b> ".$dados[1]."
					<br> 
					<form method='post' action='restrito_g_deletar_processa.php'>
						<br><b>
						<input type='radio' name='confirma' value=".$dados[0]." required>
						 <img src='icones_menu/block.png'> <b>Deletar ".$dados[1]." ?</b>
						<br><br><input type='submit' class='submit_cad' value='Continuar'>
					</form>
			
				  </td></tr>";
			}
		?>	
		</table>
	</div>
	</div>
</body>
</html>

