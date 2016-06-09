<?php require("parte_topo.php"); 
require("conectar.php"); 
$sessao="nenhuma"
?>
<body>
	<a href="restrito.php" class="link_simples"><< Voltar</a>
<?php
mysql_connect('localhost' ,'root','');
mysql_select_db('sistema_manutencao');

if(isset($_POST['senha_primeiro_acesso'])){
    
$email = $_POST['email'];
$senha = $_POST['senha_primeiro_acesso'];

$pesquisa_login = mysql_query("SELECT * FROM  `cad_usuario` WHERE  `email` =  '$email';");
if(mysql_num_rows($pesquisa_login)>0){
    
    $pesquisa_confirmacao = mysql_query("SELECT * FROM  `cad_usuario` WHERE  `email` =  '$email' and cad_status = 'aprovado';");
    if(mysql_num_rows($pesquisa_confirmacao)>"0"){
        
    $pesquisa_senha = mysql_query("SELECT * FROM  `cad_usuario` WHERE  `cpf` =  '$senha';");
    if(mysql_num_rows($pesquisa_senha)>"0"){
        
        $tudo = mysql_fetch_array($pesquisa_senha);
        session_start();
        $_SESSION['usuario_on'] = $tudo;
        header("Location:index_user.php");
        
        
        }else{
            echo("<h6 id='h6resp'>Senha incorreta, por favor verifique suas informações e tente novamente</h6><br>");
            echo'<a href="primeiro_acesso.php">Voltar</a><br>';}
           
    }else{
        echo'<h6 id="h6resp">Usuário não autorizado pelo administrador</h6><br>';
        echo'<a href="index.php">Voltar</a><br>';}
        
}else{
        echo("<h6 id='h6resp'>Usuário não cadastrado, ´por favor verifique suas informações e tente novamente</h6><br>");
        echo'<a href="index.php">Voltar</a><br>';}
    
}else{

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$pesquisa_login_usuario = mysql_query("SELECT * FROM  `cad_usuario` WHERE  `email` =  '$email';");
$pesquisa_login_manutencao = mysql_query("SELECT * FROM  `cad_manutencao` WHERE  `email` =  '$email';");

//se o email que veio estiver em uma das tabelas (manutencao e usuario) ctn
if(mysql_num_rows($pesquisa_login_manutencao)>0 || mysql_num_rows($pesquisa_login_usuario)>0){

    //se estiver na tabela usuario
    if(mysql_num_rows($pesquisa_login_usuario)>0){
    
    $pesquisa_confirmacao = mysql_query("SELECT * FROM  `cad_usuario` WHERE  `email` =  '$email' and cad_status = 'aprovado';");
    if(mysql_num_rows($pesquisa_confirmacao)>"0"){
        
    $pesquisa_senha = mysql_query("SELECT * FROM  `cad_usuario` WHERE  `senha` =  '$senha';");
    if(mysql_num_rows($pesquisa_senha)>"0"){
        
        $tudo = mysql_fetch_array($pesquisa_senha);
        session_start();
        $_SESSION['usuario_on'] = $tudo;
        header("Location:user_index.php");
           
    }else{
        echo("<h6 id='h6resp'>Senha incorreta, por favor verifique suas informações e tente novamente</h6><br>");
        echo'<a href="index.php">Voltar</a><br>';}
    
    }else{
       echo'<h6 id="h6resp">Usuário não autorizado pelo administrador</h6><br>';
            echo'<a href="index.php">Voltar</a><br>';}
    
    /*--------------------------------------------------------------------------------------------------------*/
    //se não (ou seja se estiver na tabela manutencao) ctn
    }else{
    if(mysql_num_rows($pesquisa_login_manutencao)>"0"){
        
    $pesquisa_senha = mysql_query("SELECT * FROM  `cad_manutencao` WHERE  `senha` =  '$senha';");
    if(mysql_num_rows($pesquisa_senha)>"0"){
        
        $tudo = mysql_fetch_array($pesquisa_senha);
        session_start();
        $_SESSION['manutencao_on'] = $tudo;
        header("Location:manut_index.php");
           
    }else{
        echo("<h6 id=1h6resp'>Senha incorreta, por favor verifique suas informações e tente novamente</h6><br>");
        echo'<a href="index.php">Voltar</a><br>';}
    
    }else{
       echo'<h6 id="h6resp">Usuário não autorizado pelo administrador</h6><br>';
            echo'<a href="index.php">Voltar</a><br>';} 
    }   
}else{
        echo("<h6 id=1h6resp'>Usuário não cadastrado, por favor verifique suas informações e tente novamente</h6><br>");
        echo'<a href="index.php">Voltar</a><br>';}
}
?>

<?php require("parte_rodape.php"); ?>	

