<?php

			session_start();
			mysql_connect('localhost' , 'root' , '');
			mysql_select_db('sistema_manutencao');
			if(isset($_SESSION['manutencao_on'])){
                            
            require("parte_topo.php");                
?>
<div class="chamadas">
<?php
echo'<br><h4 id="h4_solici">Histórico de Chamadas</h4>';

    $pesquisa = mysql_query("SELECT *  FROM `info_problemas` WHERE `status` = 'atendida'");
    if(mysql_num_rows($pesquisa) > 0){
        echo'<table><br><br>
<tr>
    <td><b>N° Computador   </b></td>
    <td><b>Tipo do problema  </b></td>
    <td><b>Laboratório / Prédio </b></td>
</tr>
<tr><td>
<tr><td>
<tr><td>
';
             
        while($var = mysql_fetch_array($pesquisa)){
        $cod_info_problemas = $var[0];    
        $cod_lab = $var[1];
        $computador = $var[2];
        $tipo = $var[3];
        $dt_informado = $var[5];
        $predio_lab = mysql_query('select numero, local from cad_labs where cod_lab = '.$cod_lab.';');
            $predio = mysql_fetch_array($predio_lab);

        echo'
            
<tr>
    <td class="td_info">'.$computador.'</td>
    <td class="td_info" id="tipo_prob">'.$tipo.'</td>
   <td class="td_info">'.$predio[0].' / '.$predio[1].'</td>
</tr>
<tr>
    <td class="td_data"><i>Data: </i></td>
    <td class="td_data">'.$dt_informado.'</td>
        
    <td></td>
</tr>
<tr><td>
<tr><td>
            ';

          
        
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
