<?php

$conexion = mysql_connect("localhost","video2brain","video2brain");
if(!$conexion){
	die(mysql_error());

}

mysql_select_db("agenda", $conexion);

mysql_query("UPDATE miagenda SET Edad = '19' WHERE Nombre = 'Marisol' AND Apellid0= 'Daza'");


mysql_close($conexion);


?>