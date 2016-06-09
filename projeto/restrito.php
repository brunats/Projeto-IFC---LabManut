<?php require("parte_topo.php"); ?>
<body>
	<a href="index.php" class="link_simples"><< Voltar</a>
	<form method="post" class="form_login_restrito" action="restrito_login_processa.php" >
		<a>Login</a><br />
		<input type="text" name="login" title="Login" class="campo_cad" required ><br /><br />
		<a>Senha</a><br />
		<input type="password" name="senha" title="Senha" class="campo_cad" required ><br />
		<br />
		<br />
		<input type="submit" class="submit_cad" value="Logar">
	</form>
	
<?php require("parte_rodape.php"); ?>	

