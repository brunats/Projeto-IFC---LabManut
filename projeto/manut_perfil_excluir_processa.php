<?php require("parte_topo.php"); ?>
<body>
<?php

			session_start();
			mysql_connect('localhost' , 'root' , '');
			mysql_select_db('sistema_manutencao');
			if(isset($_SESSION['manutencao_on'])){
                            $sessao = "manutencao";
                            
?>
<?php
$cod_doador = $_SESSION['manutencao_on']['cod_manutencao'];
$deletar = mysql_query("delete from manutencao where cod_manutencao = '$cod_manutencao';");

if($deletar){    
session_start();
session_destroy();
header('location: index.php'); 

}else{
    echo"Erro ao excluir perfil, por favor contate um administrador<br>')";
    echo"<a href='manut_perfil.php'>Voltar</a>)";
}
?>
<?php
}else{
	echo'Você não tem permissão<br>';
        echo'<a href="index.php"><< Voltar</a>';
}
?>
<?php require("parte_rodape.php"); ?>	
