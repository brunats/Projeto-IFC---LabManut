<?php 
session_start();
session_destroy();
require("parte_topo.php"); 
require("conectar.php"); 
$sessao="nenhuma"
?>
<body>
	
	<div class="geral">
		<a href="index.php" class="link_simples"><< Voltar</a>
		<div class="form_solicita_cad">
			<h2>Seu primeiro acesso?</h2>
			<h6>No seu primeiro acesso, sua senha corresponde ao seu cpf.
                            <br>Ao realizar o login indica-se que modifique sua senha<br>
                            no menu perfil</h6>
		
			<form  class="form_login_primeiro" method="POST" action="processa_login.php">
                            <label>Email<br><input class="campo_cad" title="email" type="text" name="email" required ></label>
                            <br>
                            <label>Senha (CPF)<br><input class="campo_cad" title="senha_primeiro_acesso" type="text" name="senha_primeiro_acesso" required ></label>
                            <br> <input class="submit_login" title="logar" type="submit" value="Logar">
			</form>
		
		</div>
	</div>

<?php require("parte_rodape.php"); ?>	
