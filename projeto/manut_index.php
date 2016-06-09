<?php require("parte_topo.php"); ?>
<body>
<?php

			session_start();
			mysql_connect('localhost' , 'root' , '');
			mysql_select_db('sistema_manutencao');
			if(isset($_SESSION['manutencao_on'])){
                            
?>
<div class="geral_painel">
	
<?php 
	require("manut_menu.php");
?>	

<br><h4 id="h4_solici">Bem vindo <i>Manutencionista</i></h4>
    <iframe id="iframe_index" scrolling="auto" class="frame_manutencao" frameborder="0" src="manut_novas_chamadas.php">
		
		
	</iframe>
	
</div>
<?php
}else{
	echo'Você não tem permissão<br>';
        echo'<a href="index.php"><< Voltar</a>';
}
?>
<?php require("parte_rodape.php"); ?>	
