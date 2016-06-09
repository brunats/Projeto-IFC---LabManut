<?php

			session_start();
			mysql_connect('localhost' , 'root' , '');
			mysql_select_db('sistema_manutencao');
			if(isset($_SESSION['usuario_on'])){
                            
			require "parte_topo.php";
?>
<?php
$user_cod = $_SESSION['usuario_on']['cod_usuario'];
if(isset($_POST['cod_lab']) && isset($_POST['computador'])  && isset($_POST['tipo'])){
$cod_lab = $_POST['cod_lab'];
$computador = $_POST['computador'];
$tipo = $_POST['tipo'];
$cod_manutencao = '1';
if(isset($_POST['descricao']) && $_POST['descricao'] != '0'){
    //inserir tds as infos
   $descricao = $_POST['descricao']; 
   $inserir = mysql_query("INSERT INTO `sistema_manutencao`.`info_problemas` 
      (`cod_info_problemas`, `cod_lab`, `computador`, `tipo`, `descricao`, `dt_informado`, `status`, `cod_usuario`, `cod_manutencao`) 
       VALUES (NULL, '".$cod_lab."', '".$computador."', '".  utf8_encode($tipo)."', '".  utf8_encode($descricao)."', CURRENT_TIMESTAMP, 'aguardando', '".$user_cod."', '".$cod_manutencao."');");
   if($inserir){
       echo'<h3>Problema enviado com sucesso</h3>';
       echo '<a href="user_info_problema.php" class="submit_cad">Continuar</a>';
   }else{
       echo '<h3>O '.mysql_error().' foi encontrado por favor contate o administrador</h3>';
       echo '<a href="user_info_problema.php" class="submit_cad">Voltar</a>';
   }
}else{
    //tds menos descricao
    $inserir = mysql_query("INSERT INTO `sistema_manutencao`.`info_problemas` 
      (`cod_info_problemas`, `cod_lab`, `computador`, `tipo`, `descricao`, `dt_informado`, `status`, `cod_usuario`, `cod_manutencao`) 
       VALUES (NULL, '".$cod_lab."', '".$computador."', '".  utf8_encode($tipo)."', '', CURRENT_TIMESTAMP, 'aguardando', '".$user_cod."', '".$cod_manutencao."');");
   if($inserir){
       echo'<h3>Problema enviado com sucesso</h3>';
       echo '<a href="user_info_problema.php" class="submit_cad">Continuar</a>';
   }else{
       echo '<h3>O '.mysql_error().' foi encontrado por favor contate o administrador</h3>';
       echo '<a href="user_info_problema" class="submit_cad">Voltar</a>';
}
    
}

}else{echo'nao recebeu os dados';}

?>
<?php
}else{
    echo"<script language='javascript' type='text/javascript'>
            alert('Página restrita a usuários logados, por favor faça login!');
            window.location.href='index.php';
            </script>";
    header("location:index.php");
}
                        
?>
