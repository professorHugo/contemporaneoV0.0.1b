<?php
$db = mysql_connect ("localhost", "root", "");
$basedados = mysql_select_db("contemporaneo");

"Data: ".$dataAula = $_POST['data'];
"Sala: ".$salaDeAula = $_POST['sala_de_aula'];
"Professor: ".$professor = $_POST['professor'];
"Tempo da aula: ".$tempoDeAula = $_POST['tempo_de_aula']/60 ;
"Entrada: ".$horarioEntrada = $_POST['horario_entrada'];
"Saída: ".$horarioSaida = $horarioEntrada+$tempoDeAula;
"Matéria: ".$materiaAula = $_POST['materia'];
"Valor: ".$valorDaAula = $tempoDeAula * 134.50 ;
"Pagamento: ".$pagamentoAula = $_POST['pagamento'];

echo $QrCadastrar = "INSERT INTO agenda_aulas (data,sala,prof,entrada,saida,materia,qtd_hora,valor,pagamento) VALUES ('$dataAula', '$salaDeAula', '$professor', '$horarioEntrada', '$horarioSaida','$materiaAula','$tempoDeAula','$valorDaAula','$pagamentoAula')";
$cadastrar = mysql_query($QrCadastrar, $db);


if ($cadastrar == 1){
	//Esse script dará um alerta de que foi inserido com sucesso e chamará a página de resultados
	echo "<script> alert ('Seu evento foi inserido com sucesso. Obrigado!');";
	echo "location.href='agenda.php' </script>";
}else{ 
	//Esse script dará um alerta de que não foi inserido com sucesso e chamará a página de cadastro novamente
	echo "<script> alert ('Seu evento nao foi inserido com sucesso. Tente novamente!');";
	echo "location.href='cadastrar_agenda.php' </script>";
}

?>