<?php require("parte_topo.php"); ?>
<body>
	
	<div class="geral_painel">
	<br><h4 id="h4_solici">Cadastre um novo Manutencionista</h4>	
		
			<form class="form_adicao" method="POST" action="restrito_add_manu_processa.php">
					<br><a>CPF</a><br>
						<input type="text" class="campo_cad" name="cpf" pattern="^[0-9]{11}$" placeholder="000.000.000-00" title="Somente números" required>
					<br><a>NOME</a><br>
						<input type="text" class="campo_cad" name="nome" pattern="^[^0-9+]+" placeholder="Fulano da Silva" title="Somente letras e espaço." required>
					<br><a>E-MAIL</a><br>
						<input type="text" class="campo_cad" name="email" placeholder="exemplo@email.com" title="exemplo@email.com" required>
					<br><a>CONFIRMAR E-MAIL</a><br>
						<input type="email" class="campo_cad" name="conf_email" title="Confirmar e-mail">
					<br>
						<br /><input type="submit" class="submit_cad" title="enviar" value="Cadastrar">
			</form>	
		
	</iframe>
		
</div>
