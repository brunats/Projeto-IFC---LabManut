    <?php

			session_start();
			mysql_connect('localhost' , 'root' , '');
			mysql_select_db('sistema_manutencao');
			if(isset($_SESSION['manutencao_on'])){
                            
            require("parte_topo.php");
?>
<div class="chamadas">
<?php
echo'<br><h4 id="h4_solici">Chamadas</h4>';
    $pesquisa = mysql_query("SELECT *  FROM `info_problemas` WHERE `status` = 'aguardando' order by cod_info_problemas desc");
    if(mysql_num_rows($pesquisa) > 0){
        echo'<table>
<tr>
    <td><b>N° Computador   </b></td>
    <td><b>Tipo do problema   </b></td>
    <td><b>Laboratório / Prédio </b></td>
</tr>
<tr><br><br><td>

';
             
        while($var = mysql_fetch_array($pesquisa)){
        $cod_info_problemas = $var[0];    
        $cod_lab = $var[1];
        $computador = $var[2];
        $tipo = $var[3];
        $descricao = $var[4];
        $dt_informado = $var[5];
            $predio_lab = mysql_query('select numero, local from cad_labs where cod_lab = '.$cod_lab.' ;');
            $predio = mysql_fetch_array($predio_lab);
        
        echo'<form method="POST" action="manut_novas_chamadas_processa.php">';

        echo'
            
<tr>
    <td class="td_info">'.$computador.'</td>
    <td class="td_info" id="tipo_prob"><i>'.$tipo.'</i>: '.utf8_decode($descricao).'</td>
    <td class="td_info">'.$predio[0].' / '.$predio[1].'</td>
</tr>
<tr>
    <td class="td_data"><i>Data: </i></td>
    <td class="td_data">'.$dt_informado.'</td>
        
    <td><input type="radio" name="cod_chamadas" value="'.$cod_info_problemas.'">Atendida</td>
</tr>
<tr><td>
<tr><td>
            ';
         echo'<input type="submit" value="Atualizar" class="submit_cad">';
        echo'</form>';
   
        
        }
    echo'</table>';
    }
?>
</div>
<?php
}else{
    header("location:index.php");
}
?>
