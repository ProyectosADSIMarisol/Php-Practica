<?php
$conexion = mysql_connect("localhost","video2brain","video2brain");
/*if(!$conexion)
{
die("No se ha podido conectar por la siguiente razon: ".mysql_error());
} */

mysql_select_db("agenda",$conexion);
mysql_query("INSERT INTO miagenda (Nombre, Apellido, Edad, Telefono) VALUES ('Diego','Martinez',20,'3125678354')");

mysql_query("INSERT INTO miagenda (Nombre, Apellido, Edad, Telefono) VALUES ('Mary','Daaz',18,'3132685990')");


mysql_close($conexion);
?>