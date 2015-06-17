<?php

$conexion = mysql_connect("localhost","video2brain","video2brain");
if(!$conexion){
	die(mysql_error());



mysql_select_db("agenda", $conexion);

$peticion = mysql_query("select * from miagenda where Nombre='Diego'");
while ($fila = mysql_fetch_array($peticion)){
	echo $fila['Nombre']."".$fila['Apellido']."".$fila['Edad']."".$fila['Telefono'];
	echo "<br>";

}


}


mysql_close($conexion);
?>