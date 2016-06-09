<?php require("parte_topo.php"); ?>
<body>
<?php

			session_start();
			mysql_connect('localhost' , 'root' , '');
			mysql_select_db('sistema_manutencao');
			if(isset($_SESSION['usuario_on'])){
                            $sessao = "user";
			
?>
<div class="geral_painel">
		<div class="menu_painel">
			
			<a href="user_index.php" class="botao_menu">Home</a>
			<a target="iframe_index" href="user_chamadas.php" class="botao_menu">Chamadas</a>
			<a target="iframe_index" href="user_perfil.php" class="botao_menu">Perfil</a>
			<a href="sair.php" class="botao_menu" id="logout">SAIR</a>
		</div>
    
		<br><h4 id="h4_solici">Bem vindo!</h4>
		<iframe id="iframe_index" scrolling="auto" class="frame_manutencao" 
		frameborder="0" src="user_info_problema.php">
		
		
		</iframe>
	
</div>
<?php
}else{
	echo'Você não tem permissão<br>';
        echo'<a href="index.php"><< Voltar</a>';
}
?>
<?php require("parte_rodape.php"); ?>	
