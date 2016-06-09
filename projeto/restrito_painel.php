<?php 
	session_start();
	
	if($_SESSION["admin_on"] == true){
	require("parte_topo.php"); 
?>
<body>
	<a href="restrito_painel.php"><img id="icone_atualizar" src="icones_menu/atualizar.png" title="atualizar">	</a>
	
	<div class="geral_painel">
		<?php require("parte_restrito_menu.php") ?>
		
		<iframe id="iframe_painel" scrolling="auto" class="frame_restrito" 
		frameborder="0" src="restrito_inicio.php">
		
		
		</iframe>
		
	</div>

<?php 

		require("parte_rodape.php"); 
	}
	else{
		header("location:index.php");
	}
?>	

