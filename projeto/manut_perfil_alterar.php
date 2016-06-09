<?php

			session_start();
			mysql_connect('localhost' , 'root' , '');
			mysql_select_db('sistema_manutencao');
			if(isset($_SESSION['manutencao_on'])){
                            
            require("parte_topo.php");
?>
<div>
			<br><h4 id="h4_solici">Atualizar Perfil:</h4>
			<h5>* Preenchimento Obrigatório</h5>
		
			<form method="POST" action="manut_perfil_alterar_processa.php">
				<table>
					<tr>
						<td>Nome:</td>
						<td><input type="text" class="campo_cad" name="nome" pattern="^[^0-9+]+" title="Somente caracteres"></td>
					</tr>
					<tr>
						<td>E-mail:</td>
						<td><input type="email" class="campo_cad" name="email" placeholder="exemplo@exemplo.com" title="E-mail"></td>
					</tr>
                                        <tr>
						<td>Nova senha:</td>
						<td><input type="password" class="campo_cad" name="senha_new" title="Nova senha"></td>
					</tr>
                                        <tr>
						<td>Senha atual:</td>
						<td><input type="password" class="campo_cad" name="senha_atual" title="Senha atual" required>  *</td>
					</tr>
					<tr>
						<td><input type="submit" class="submit_cad" title="enviar" value="Alterar"></td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td><a class="submit_cad" href="manut_perfil.php">Voltar</a></td>
					</tr>
					
					
				</table>
			</form>
		
		</div>
<?php
}else{
    header("location:index.php");
}
?>
