<?php 

	require("parte_topo.php"); 
		
	session_start();
	session_destroy();
?>
<body>
	
	<div class="geral">
		<div class="area_login">
			<div class="area_login_info">
				<a href="#">Recuperar Senha</a> | 
				<a href="solicita_cad.php">Solicitar Cadastro</a>
			</div>
			
			<form class="form_login" method="POST" action="processa_login.php">
				E-mail <input class="form_campos_login" title="email" type="text" name="email" required >
				Senha <input class="form_campos_login" title="senha" type="password" name="senha" required >
				<input class="submit_login" title="logar" type="submit" value="Logar">
			</form>
		</div>
		<img src="logoprfc.jpg">
	</div>

<?php require("parte_rodape.php"); ?>	

