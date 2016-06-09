<?php

			session_start();
			mysql_connect('localhost' , 'root' , '');
			mysql_select_db('sistema_manutencao');
			if(isset($_SESSION['usuario_on'])){
             
            require("parte_topo.php");               
?>

<?php

$session_cod = $_SESSION['usuario_on']['cod_usuario'];
$session_senha = $_SESSION['usuario_on']['senha'];
$antiga_senha = md5($_POST['senha_atual']);

    //se a senha inserida é igual a cadastrada
    if($antiga_senha == $session_senha){
            //var controle = qantas campos foram alterados
        $controle = 0;
        //alterar nome
        if(isset($_POST['nome']) && $_POST['nome'] != ''){            
            $nome = trim($_POST['nome']);
            $atualizar_nome = mysql_query("
                UPDATE  `sistema_manutencao`.`cad_usuario`
                SET  `nome` =  '".utf8_encode($nome)."' 
                WHERE  `cad_usuario`.`cod_usuario` ='".$session_cod."';"
                    );
            if($atualizar_nome){
                
                    $controle = 1 + $controle;
                
                
            }else{
                echo'Erro ao atualizar nome, tente novamente ou contate o administrador.<br>';
                echo'<a target="iframe_index" href="user_perfil.php">Voltar</a>';
            }
        
        }
        
        //alterar email
        if(isset($_POST['email']) && $_POST['email'] != ''){            
            $email = trim($_POST['email']);
            $atualizar_mail = mysql_query("
                UPDATE  `sistema_manutencao`.`usuario`
                SET  `email` =  '".utf8_encode($email)."' 
                WHERE  `cad_usuario`.`cod_usuario` ='".$session_cod."';"
                    );
            if($atualizar_mail){
                
                    $controle = 1 + $controle;
                
                
            }else{
                echo'Erro ao atualizar e-mail, tente novamente ou contate o administrador.<br>';
                echo'<a target="iframe_index" href="user_perfil_alterar.php">Voltar</a>';
            }
        
        }
        
        //alterar senha
        if(isset($_POST['senha_new']) && $_POST['senha_new'] != ''){            
            $senha_new = trim($_POST['senha_new']);
            $atualizar_senha = mysql_query("
                UPDATE  `sistema_manutencao`.`cad_usuario`
                SET  `senha` =  '".utf8_encode(md5($senha_new))."' 
                WHERE  `cad_usuario`.`cod_usuario` ='".$session_cod."';"
                    );
            if($atualizar_senha){
                
                    $controle = 1 + $controle;
                
                
            }else{
                echo'Erro ao atualizar senha, tente novamente ou contate o administrador.<br>';
                echo'<a target="iframe_index" href="user_perfil_alterar.php">Voltar</a>';
            }
        
        }
        
        
    //atualizar sessão com novas informações
    $pesquisa = mysql_query("SELECT * FROM  `cad_usuario` WHERE  `cod_usuario` =".$session_cod.";");
    if($pesquisa){
        
        session_destroy();
        session_start();
        $_SESSION['usuario_on'] = mysql_fetch_array($pesquisa);
    }
    
    //se o controle foi alterado mais de uma vez
        if($controle > 1){
            echo'Suas alterações foram atualizadas com sucesso<br>';
            echo'<a target="iframe_index" href="user_perfil.php">Voltar</a>';
        }
        
        if($controle== 0){
            echo'Nenhuma alteração feita<br>';
            echo'<a target="iframe_index" href="user_perfil.php">Voltar</a>';
        }
    
    }else{
        echo'A senha atual inserida não corresponde á cadastrada, por favor tente novamente ou contate o administrador<br>';
        echo'<a target="iframe_index" href="user_perfil_alterar.php">Voltar</a>';
    }
    
   }else{
	echo'Você não tem permissão<br>';
        echo'<a href="index.php"><< Voltar</a>';
}
?>

