<?php require("parte_topo.php"); ?>
<body>
	
	<div class="geral_painel">
		<br><h4 id="h4_solici">Enviar Mensagem</h4>
		<h6>* Envie e-mails informativos aos usuários.</h6>
			<form method="POST" action="restrito_mensagem_processa.php">
				
				
				<textarea name="mensagem" id="textarea_msg" cols="50" rows="6" required>
				
				</textarea>
				<br>
				<input type="submit" class="submit_cad" value="Enviar Mensagem">
			</form>
		</div>
		
	</div>
</body>
</html>
