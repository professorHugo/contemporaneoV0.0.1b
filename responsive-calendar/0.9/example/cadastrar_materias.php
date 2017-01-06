<form action="" method="post">
	<input type="text" name="materia" placeholder="Matéria">
	<input type="submit" value="Cadastrar" name="cadastrar">
</form>
<?php
	$conexao = mysql_connect ("localhost", "root", "");
	mysql_select_db ("contemporaneo");
	if(isset($_POST['cadastrar'])){
		$materia = $_POST['materia'];
		
		$SQLINSERT = "INSERT INTO materias_disponiveis(materia)VALUES ('$materia')";
		
		$inserir = mysql_query($SQLINSERT);
		
		if($inserir):echo 'Cadastrado';else:'Não Cadastrado';endif;
	}
	$QuerybuscarMaterias = "SELECT * FROM materias_disponiveis";
	$ExeQrBuscarMaterias = mysql_query($QuerybuscarMaterias);
	
	if(mysql_num_rows($ExeQrBuscarMaterias)>0){
		while($resBuscarMaterias = mysql_fetch_assoc($ExeQrBuscarMaterias)){
			?>
			<ul>
				<li><?php echo $resBuscarMaterias['materia'];?></li>
			</ul>
			<?php
		}
	}
?>