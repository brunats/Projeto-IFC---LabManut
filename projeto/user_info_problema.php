<?php

			session_start();
			mysql_connect('localhost' , 'root' , '');
			mysql_select_db('sistema_manutencao');
			if(isset($_SESSION['usuario_on'])){
                            
			require("parte_topo.php");
?>
<div>
			<br><h4 id="h4_solici">Informar Problema:</h4>
			<h5>* Preenchimento Obrigatório</h5>
		
			<form method="POST" action="user_info_problema_processa.php" class="form_info_problema">
				<table>
					<tr>
						<td><span>Laboratório / Prédio:</span></td>
                                                <td>*</td>
                                                <td><select name="cod_lab" title="Laboratório / Prédio">
                                                        <?php
                                                        $select = mysql_query("SELECT * FROM  `cad_labs;");
                                                        if($select){
                                                            while($linha = mysql_fetch_array($select)){
                                                                $cod = $linha[0];
                                                                $lab = $linha[1];
                                                                $predio = $linha[2];
                                                                
                                                                echo'<option value="'.$cod.'">'.$lab.' / '.$predio.'</option>';
                                                            }
                                                        }
                                                        ?>
                                                        
                                                    </select></td>
					</tr>
					<tr>
						<td><span>Computador:</span></td>
                                                <td>*</td>
						<td><input type="text" class="campo_cad" name="computador" title="Somente números" pattern="^[0-9]+" maxlength='3' required></td>
					</tr>
                                        <tr>
						<td><span>Tipo de problema:</span></td>
                                                <td>*</td>
						<td><input type="text" class="campo_cad" name="tipo"  required></td>
					</tr>
                                        <tr>
						<td><span>Descricão:</span></td>
                                                <td></td>
						<td><textarea name="descricao" id="textarea_msg" cols="60" rows="6"></textarea></td>
					</tr>
					<tr>
						<td><input type="submit" class="submit_cad" title="enviar"></td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td><a class="submit_cad" href="manut_perfil.php">Voltar</a></td>
					</tr>
				</table>
			</form>
		
		</div>
<?php
}else{
    header("location:index.php");
}
?>
