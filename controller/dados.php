<?php
mysql_connect("localhost", "root", "");
mysql_select_db("fiquecomtailor");

// Seleciona todos os registros da tabela
$query = "SELECT * FROM pessoa";
$query = mysql_query($query);

$queryh = "SELECT * FROM pessoa WHERE sexo = 'h'";
$queryh = mysql_query($queryh);

$querym = "SELECT * FROM pessoa WHERE sexo = 'm'";
$querym = mysql_query($querym);

// Conta todos os registros
$total = mysql_num_rows($query);
$totalh = mysql_num_rows($queryh);
$totalm = mysql_num_rows($querym);

// Exibe o total de registros
echo "<center>Total de pessoas interessadas: \n".$total;
echo "<br />HOMENS interessados: \n".$totalh;
echo "<br />MULHERES interessadas: ".$totalm;

?>