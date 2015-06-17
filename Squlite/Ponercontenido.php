
<?php
$conexion = new PDO('sqlite:bibliotecacd.sqlite');
 
// $consulta = 'CREATE TABLE Discos (
/*Artista varchar(20) NOT NULL,
Disco varchar(50) NOT NULL,
Anio Integer )';

$conexion=$conexion->exec($consulta); */
$count = $conexion->exec("INSERT INTO Discos(Artista,Disco,Anio) VALUES ('Enrique Iglesias','Bailado','2013')");

$count = $conexion->exec("INSERT INTO Discos(Artista,Disco,Anio) VALUES ('Andres Cepeda','Ese Amor','2009')");

$count = $conexion->exec("INSERT INTO Discos(Artista,Disco,Anio) VALUES ('La Oreja De Vangod','Rosas','2000')");


?>