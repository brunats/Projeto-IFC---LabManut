<?php 

	require("parte_topo.php"); 
		
	session_start();
	session_destroy();
?>
<body>
	
	<div class="geral">
		<div class="sobre">
		<style type="text/css">
			.sobre{
				background-color: #fff;
				box-shadow: 2px 4px 6px #000;
				text-align: left;
				z-index: 10;
			}
			.textosobre{
				position: absolute;
				color: #fff;
				text-shadow: 2px 4px 9px #000;
				font-size:108%;
				border: 1px solid #275233;
				padding: 15px;
				background-color: #3C7D4E;
				box-shadow: 2px 4px 6px #000;
			}
			.sobre img{
				width: 100px;
				
			}
		</style>
		
		<img src="logoprfc.jpg">
			<div class="textosobre">
			<br /><br />
			Os laboratórios de informática de todas as escolas públicas sofrem com a falta de manutenção dos equipamentos, 
			resultando na insatisfação dos utilizadores (servidores e alunos), na precária conservação dos equipamentos bons, 
			entre outros pontos negativos. 
			<br><br>No IFC Campus Araquari existe essa situação, 
			discuntindo-se sobre os motivos que levam a essa falta de manutenção encontra-se que o 
			problema principal é a falta de informação em tempo real, uma solução plausível seria um 
			aplicativo que através de informações cedidas pelos funcionários utilizadores dos laboratórios, 
			informaria a equipe de manutenção sobre os problemas facilitanto a manutenção diária dos laboratórios.	
			<br><br>O aplicativo vem para suprir essas dificuldades nos serviços de manutenção, facilitando a comunicação entre os servidores. 
			O sistema ou equipamento danificado é visualizado pelo servidor, e ele envia uma mensagem por meio da interface do aplicativo 
			ao servidor especializado que irá reparar o dano,
			 disponibilizando uma maior agilidade ao processo de manutenção sob comunicação.
			<br><br>
			
			<a href='index.php' class="submit_cad">Voltar</a>
			
			</div>
		
		
		</div>
	</div>

<?php require("parte_rodape.php"); ?>	

