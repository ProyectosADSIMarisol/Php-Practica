
<?php
$conexion = new PDO('sqlite:bibliotecacd.sqlite');
 
 $consulta = 'CREATE TABLE Discos (
Artista varchar(20) NOT NULL,
Disco varchar(50) NOT NULL,
Anio Integer )';

$conexion=$conexion->exec($consulta);

?>