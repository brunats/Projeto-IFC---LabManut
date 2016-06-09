<?php
	session_start();
	$usu = $_SESSION["usu_solicita"];
	$res = $_POST["solicitacao"];
	require("conectar.php");
	
	$busca = mysql_query("SELECT nome, email FROM cad_usuario WHERE cpf='$usu'");
	$dados = mysql_fetch_array($busca);
	
	if($res == "sim"){
			if($acao = mysql_query("UPDATE cad_usuario SET cad_status='aprovado' where cpf='$usu'")){
				$mensagem = "Olá ".$dados[0]."! Seu cadastro foi aprovado com sucesso em nosso sistema.\r\n
				Agora você nos auxiliar nos processos informativos na manutenção.
			
				\r\nObrigado";
			
				$mensagem = wordwrap($mensagem, 60, "\r\n");
				if(mail($dados[1], "Cadastro aprovado!", $mensagem)){
					header("location:restrito_g_solicita.php");
				}
				else{
				}	
			}
	}
	else{
		if($acao = mysql_query("UPDATE cad_usuario SET cad_status='reprovado' where cpf='$usu'")){
			echo $res;
			header("location:restrito_g_solicita.php");
		}
	}
?>
