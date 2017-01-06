<?php

$conexao = mysql_connect ("localhost", "root", "");

mysql_select_db ("contemporaneo");



$resultado = mysql_query ("SELECT * FROM agenda_aulas ORDER BY id DESC");

$linhas = mysql_num_rows ($resultado);

?>
<h1><b>Agenda</b></h1>
<a href="cadastrar_agenda.php">Cadastrar Novo</a>
<hr />
<?php

while($resAgendados = mysql_fetch_assoc($resultado)){
	?>
	Data: <?php echo $resAgendados['data']?> <br>
	Na sala: <?php echo $resAgendados['sala']?> <br>
	Professor: <?php echo $resAgendados['prof']?> <br>
	Entrada: <?php echo $resAgendados['entrada']?><br>
	Saída: <?php echo $resAgendados['saida']?><br>
	Matéria: <?php echo $resAgendados['materia']?><br>
	Quantidade de tempo: <?php echo $resAgendados['qtd_hora']?><br>
	Valor da aula: <?php echo $resAgendados['valor']?><br>
	Pagamento: <?php echo $resAgendados['pagamento']?>
	<hr>
	<?php
}
?>