<?php require("parte_topo.php"); ?>
<body>
	
	<div class="geral">
		<a href="index.php" class="link_simples"><< Voltar</a>
		<div class="form_solicita_cad">
			<h2>Solicitação de cadastro:</h2>
			<h6>* Após enviado o formulário, seus dados serão verificados
				por nossa equipe e se <br />aprovado, você receberá um e-mail nosso com uma
				senha temporária para o acesso. </h6>
		
			<form method="POST" action="solicita_cad_processo.php">
				<table>
					<tr>
						<td>CPF</td>
						<td><input type="text" class="campo_cad" name="cpf" placeholder="000.000.000-00" pattern="^[0-9]+" title="Somente Números" required></td>
					</tr>
					<tr>
						<td>Nome</td>
						<td><input type="text" class="campo_cad" name="nome" placeholder="Fulano da Silva" title="Somente Caracteres" required></td>
					</tr>
					<tr>
						<td>E-mail</td>
						<td><input type="email" class="campo_cad" name="email" placeholder="exemplo@email.com" required></td>
					</tr>
					<tr>
						<td>Confirme seu e-mail</td>
						<td><input type="email" class="campo_cad" name="conf_email" required></td>
					</tr>
					<tr>
						<td>O que você é na Instituição?</td>
						<td><select name="categoria" title="O que você é na Instituição?" required>
								<option value="professor">Professor</option>
								<option value="estudante">Estudante</option>
								<option value="monitor">Monitor</option>
								<option value="outro">Outro</option>
							</select></td>
					</tr>
					<tr>
						<td></td>
						<td><br /><input type="submit" class="submit_cad" title="enviar"></td>
					</tr>
				
				</table>
			</form>
		
		</div>
	</div>

<?php require("parte_rodape.php"); ?>	

