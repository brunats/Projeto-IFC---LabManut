<?php require("parte_topo.php"); ?>
<body>
	
	<div class="geral_painel">
	<br><h4 id="h4_solici">Gerencie as Solicitações de Cadastro</h4>
	
		<h5 class="h5_edited">
		
		</h2>
		<div class="lista_solicitacoes">
		<?php
			
			require("conectar.php");
			
			$sintaxe = mysql_query("SELECT cpf, nome FROM cad_usuario WHERE cad_status = 'aguardando' order by cod_usuario desc");
				
			while($dados = mysql_fetch_array($sintaxe)){
				echo "<div class='solicitacoes'> 
							<a>	
								<img src='icones_menu/solicitacao.png'>
								<b>Nome</b>
								<a id='link_solicitacao' href='restrito_gerencia_solicitacao.php?cod=".$dados[0]."'> " . $dados[1] . "</a>
							</a>
					<br /></div>";
			}
			
		?>
		</div>
		
	</div>
	
</body>
</html>

