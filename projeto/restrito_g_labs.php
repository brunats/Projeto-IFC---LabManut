<?php require("parte_topo.php"); ?>
<body>
	
	<div class="geral_painel">
	<br><h4 id="h4_solici">Cadastre Laboratórios/Salas</h4>	
		
			<form class="form_adicao" method="POST" action="restrito_add_labs_processa.php">
					<br><a>NÚMERO</a><br>
						<input type="text" class="campo_cad" name="num" title="Somente números" placeholder="Ex.: 001" required>
					<br><a>LOCAL</a><br>
						<input type="text" class="campo_cad" name="local" pattern="^[^0-9+]+" placeholder="Ex.: Bloco H" title="Somente letras e espaço." required>
					<br>
						<br /><input type="submit" class="submit_cad" title="enviar" value="Cadastrar">
			</form>	
		
	</iframe>
		
</div>
