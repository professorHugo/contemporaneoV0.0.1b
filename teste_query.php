<?php
$con=mysqli_connect("localhost","root","","contemporaneo2");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries and print out affected rows
echo "Affected rows: " . mysqli_affected_rows($con);

$QueryBuscar = "SELECT entrada,(entrada + INTERVAL 30 MINUTES) AS saida,IF(ISNULL(nome_disciplina), 'Livre', 'Ocupada') AS status,nome_disciplina, compartilhada FROM horario WHERE id_sala = 1";
$ExeQrBuscar = mysql_query($QueryBuscar);

echo $linhas = mysql_affected_rows($con);
/*
if($linhas > 0){
	while($res = mysqli_fetch_assoc($ExeQrBuscar)){
		print_r ($res);
	}
}*/