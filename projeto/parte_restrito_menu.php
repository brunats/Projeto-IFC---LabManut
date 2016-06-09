<div class="menu_painel">
			<a target="iframe_painel" href="restrito_inicio.php" class="botao_menu"><img src="icones_menu/01.png">Início</a>
			<a target="iframe_painel" href="restrito_g_solicita.php" class="botao_menu"><img src="icones_menu/02.png">Solicitações de Cadastro
			<?php
			
				require("conectar.php");
			
				$num_solicita = mysql_query("SELECT count(cod_usuario) FROM cad_usuario WHERE cad_status = 'aguardando'");
				$result = mysql_fetch_array($num_solicita);
				
				if($result[0] != 0){
					echo "<spam id='num_solici'>". $result[0] ."</spam>";
				}
			?>
			</a>
			<a target="iframe_painel" href="restrito_g_usu.php" class="botao_menu"><img src="icones_menu/04.png">Usuários</a>
			<a target="iframe_painel" href="restrito_g_equipe.php" class="botao_menu"><img src="icones_menu/04.png">Equipe</a>
			<a target="iframe_painel" href="restrito_g_labs.php" class="botao_menu"><img src="icones_menu/06.png">Laboratórios</a>
			<a target="iframe_painel" href="restrito_mensagens.php" class="botao_menu"><img src="icones_menu/05.png">Mensagens</a>
                        <a href="sair.php" class="botao_menu" id="logout">SAIR</a>

</div>
