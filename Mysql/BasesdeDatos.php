<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Curso Php</title>
</head>
<center>
<header> <h1> Bases Del Lenguaje Php  </h1></header>

<header> <h1> Bases de datos</h1></header>
</center>
<body bgcolor="#D8BFD8">



<fieldset>
<h3>MYSQL</h3>
<h3>Crear un  usuario y una base de datos en phpmyadmin</h3>


<?php

?>

</fieldset>
<br>
<fieldset>
<h3>Capitulo MYSQL 3.1.2. ---- 3.1.12.</h3>


<?php
$conexion = mysql_connect("localhost","video2brain","video2brain");
if (!$conexion) {
  die("No se ha podido conectar".mysql_error());
}

if(mysql_query("CREATE DATABASE agenda",$conexion))
{
echo "Se ha creado la base de datos";
}

else 
{
echo "No se ha podido crear la base de datos por el siguiente error:".mysql_error();

}


//Preparo esta peticion

mysql_select_db("agenda",$conexion);
$sql = "CREATE TABLE migenda
(
  personaID int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(personaID),
Nombre varchar(15),
Apellido varchar(15),
Edad int,
Telefono int
  )";


//ejecuto la  ejecucion

mysql_query($sql,$conexion);

//Cerrar la conexion


 mysql_close($conexion);

?>

</fieldset>


</body>

</html>