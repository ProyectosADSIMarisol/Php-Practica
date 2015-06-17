<?php
$conexion = new PDO('sqlite:bibliotecacd.sqlite');

$consulta = "DELETE FROM Discos Where Artista='Maluma'";
$resultado = $conexion->exec($consulta);

$conexion  = null;
?>