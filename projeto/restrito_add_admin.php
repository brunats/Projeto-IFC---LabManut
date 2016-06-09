<?php require("parte_topo.php"); ?>
<body>
	
	<div class="geral_painel">
	<br><h4 id="h4_solici">Cadastre um novo Administrador</h4>
		
			<form class="form_adicao" method="POST" action="restrito_add_admin_processa.php">
					<br><a>NOME</a><br>
						<input type="text" class="campo_cad" name="nome" pattern="^[^0-9+]+" placeholder="Fulano da Silva" title="Somente letras e espaço." required>
					<br><a>LOGIN</a><br>
						<input type="text" class="campo_cad" name="login" placeholder="fulanosilva" title="Defina um login" required>
					<br><a>SENHA</a><br>
						<input type="password" class="campo_cad" name="senha" title="Senha">
					<br>
					<a>CONFIRMAR SENHA</a><br>
						<input type="password" class="campo_cad" name="confsenha" title="Senha">
					<br><br /><input type="submit" class="submit_cad" title="enviar" value="Cadastrar">
			</form>	
		
	</iframe>
		
</div>
