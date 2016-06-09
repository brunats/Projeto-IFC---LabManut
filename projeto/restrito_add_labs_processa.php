<?php require("parte_topo.php"); ?>
<body>
	
	<div class="geral_painel">
		<?php
		
			require("conectar.php");
			
			$num = $_POST["num"];
			$local = $_POST["local"];
			
			$busca = (mysql_query("SELECT * from cad_labs WHERE numero='$num' and local='$local'"));
			
			//VERIFICAR CO-EXISTÊNCIA
			if(mysql_num_rows($busca) == 0){
				
				//INSERIR NA BASE DE DADOS
				if(mysql_query("INSERT INTO cad_labs(numero, local) values('$num','$local')")){
					echo "<br><h4>Novo Laboratório cadastrado com sucesso!</h4><br/>
								<b>Nº</b> ".$num."<br>
								<b>Local</b> ".$local."<br>";
					echo "<br><a class='submit_cad' href='restrito_g_labs.php'>Continuar</a>";
				}
					else{
						 "<br><h4>Houve algum Erro, tente novamente.<h4><br /><br />
						<a class='submit_cad' href='restrito_g_labs.php'>Voltar</a>";
				}
			}
			else{
				echo "<br><h4>Laboratório já registrado!<h4><br /><br />
					 <a class='submit_cad' href='restrito_g_labs.php'>Voltar</a>";
			}
		
		?>
	</iframe>
		
</div>
