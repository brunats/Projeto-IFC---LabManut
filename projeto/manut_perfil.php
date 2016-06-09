<?php

			session_start();
			mysql_connect('localhost' , 'root' , '');
			mysql_select_db('sistema_manutencao');
			if(isset($_SESSION['manutencao_on'])){
                            
            require("parte_topo.php");
?>
<div class='perfil'>
    <?php
$session_cpf = $_SESSION['manutencao_on']['cpf'];
$session_nome = $_SESSION['manutencao_on']['nome'];
$session_mail = $_SESSION['manutencao_on']['email'];
        echo'<p>CPF:<h3> '.$session_cpf.'</h3></p>';
        echo'<p>Nome:<h3> '.utf8_decode($session_nome).'</h3></p>';
        echo'<p>E-mail:<h3> '.$session_mail.'</h3></p>';
        echo'<a target="iframe_index" href="manut_perfil_alterar.php">Atualizar informações</a>';
        echo'';
        
        
    ?>
</div>
<?php
}else{
    header("location:index.php");
}
?>
