<?php

			session_start();
			mysql_connect('localhost' , 'root' , '');
			mysql_select_db('sistema_manutencao');
			if(isset($_SESSION['usuario_on'])){
                            
             require("parte_topo.php");     
?>
<div class="chamadas">
<?php
 echo'<br><h4 id="h4_solici">Chamadas</h4>';
    $user_cod = $_SESSION['usuario_on']['cod_usuario'];
    $pesquisa = mysql_query("SELECT *  FROM `info_problemas` WHERE `cod_usuario` = ".$user_cod."");
    if(mysql_num_rows($pesquisa) > 0){
        echo'<table><br><br>
<tr>
    <td><b>N° Computador   </b></td>
    <td><b>Tipo do problema    </b></td>
    <td><b>Laboratório / Prédio </b></td>
</tr>
<tr><td>
<tr><td>
<tr><td>
';
        
        while($var = mysql_fetch_array($pesquisa)){
            
        $cod_lab = $var[1];
        $computador = $var[2];
        $tipo = $var[3];
        $dt_informado = $var[5];
        $status = $var[6];

        echo'
<tr>
    <td class="td_info">'.$computador.'</td>
    <td class="td_info">'.$tipo.'</td>
    <td class="td_info">'.$cod_lab.'</td>
</tr>
<tr>
    <td class="td_data"><i>Data: </i></td>
    <td class="td_data">'.$dt_informado.'</td>
</tr>
<tr><td>
<tr><td>
            ';
          
        
    }
    echo'</table>';
    }else{
        echo'Nenhuma nova chamada feita por você';
    }
?>
</div>
<?php
}else{
    header("location:index.php");
}
                        
?>
