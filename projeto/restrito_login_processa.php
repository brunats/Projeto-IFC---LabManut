<?php require("parte_topo.php"); ?>
<body>
	<a href="restrito.php" class="link_simples"><< Voltar</a>
<?php
	session_start();
	require("conectar.php");
		
	if(isset($_POST['login'])&&isset($_POST['senha'])){
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		$procura = mysql_query("select * from cad_admin where login ='".utf8_decode($login)."' and senha ='".utf8_decode($senha)."' ");
		if(mysql_num_rows($procura) > '0'){
			$_SESSION['admin_on'] = mysql_fetch_array($procura);
			header("location:restrito_painel.php");
			}
			else{
				echo'<h4>Dados incorretos!</h4>';
				echo'<a href="restrito.php" class="submit_cad" >Voltar</a>';
		}
	}

?>

<?php require("parte_rodape.php"); ?>	

