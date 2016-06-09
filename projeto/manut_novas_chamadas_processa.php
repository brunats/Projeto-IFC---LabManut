<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
<?php

			session_start();
			mysql_connect('localhost' , 'root' , '');
			mysql_select_db('sistema_manutencao');
			if(isset($_SESSION['manutencao_on'])){
                            
                    
?>
        
<?php
if(isset($_POST['cod_chamadas'])){
    $cod_manutencao = $_SESSION['manutencao_on']['cod_manutencao'];
    $cod_info_problemas = $_POST['cod_chamadas'];
    
    
    
    $atualizar = mysql_query("UPDATE  `sistema_manutencao`.`info_problemas` SET  `status` =  'atendida',
`cod_manutencao` =  '".$cod_manutencao."' WHERE  `info_problemas`.`cod_info_problemas` =".$cod_info_problemas.";");
    
    if($atualizar){
        echo'<a target="iframe_index" href="manut_perfil.php">Voltar</a>';
        
    }else{
        echo'Erro ao atualizar chamada, por favor contate o administrador';
        echo'<a target="iframe_index" href="manut_perfil.php">Voltar</a>';
    }
}
?>
<?php
}else{
    header("location:index.php");
}
?> </body>
</html>
