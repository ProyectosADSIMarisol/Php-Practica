<?php
$conexion = new PDO('sqlite:bibliotecacd.sqlite');

$consulta = "UPDATE Discos SET Artista ='Maluma' WHERE Artista ='Andres Cepeda'";

$resultado = $conexion->exec($consulta);

$conexion  = null;
?>