<?php 
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$server="localhost"; 
$username= "root";
$pass="";
$bd="empregadores";
$conn= mysql_connect($server, $username, $pass);
$db = mysql_select_db($bd, $conn) or die("erro na selecao do banco");
/*$r = mysql_query("SELECT * FROM empregador ORDER BY nome ASC ;");
$lin = mysql_num_rows($r);
while ($lin = mysql_fetch_array($r)) {
	echo $lin["nome"];
}*/

?>

