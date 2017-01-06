<?php
//Off-line NOTEBOOK
/**/
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DDB","contemporaneo");
$conexao = mysqli_connect(HOST, USER, PASS, DDB);
/*
//On-Line HOSTGATOR
define("HOST","localhost");
define("USUARIO","n2yco435_vtrajes");
define("SENHA","V.iz81OPNv3V");
define("DDB","n2yco435_vtrajes");
$conexao = mysql_connect(HOST, USUARIO, SENHA) or die (mysql_error);
mysql_select_db(DDB, $conexao) or die (mysql_error);
/*
//On-Line HOSTINGER
define("HOST","mysql.hostinger.com.br");
define("USUARIO","u689132642_vtraj");
define("SENHA","casolada13231010");
define("DDB","u689132642_vtraj");
$conexao = mysql_connect(HOST, USUARIO, SENHA) or die (mysql_error);
mysql_select_db(DDB, $conexao) or die (mysql_error);
/**/