<?php

$conexion = mysql_connect("localhost","video2brain","video2brain");
if(!$conexion){
	die("No se ha podido conectar por la siguiente razon: ".mysql_error());



	mysql_select_db("agenda",$conexion);
$peticion = mysql_query("select * from miagenda");
while ($fila = mysql_fetch_array($peticion))
 {
	
echo $fila['Nombre']." ".$fila['Apellido']." ".$fila['Edad']." ".$fila['Telefono'];

echo "<br>";

}

}




mysql_close($conexion);
?>