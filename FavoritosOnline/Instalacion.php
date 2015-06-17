<?php

//CREAR UNA TABLA DE FAVORITOS---------------------

//Conexion


$conexion = new PDO('sqlite:favoritos.sqlite');

//Crear una tabla
 $consulta = '
 CREATE TABLE Favoritos (
Usuario varchar(20) NOT NULL,
Contrasena varchar(50) NOT NULL,
Titulo varchar(50) NOT NULL,
Direccion varchar(50) NOT NULL,
Categoria varchar(50) NOT NULL,
Comentario varchar(50) NOT NULL,
Valoracion Int )';

$conexion=$conexion->exec($consulta);

//Insertar contenido en la tabla

$conexion = new PDO('sqlite:favoritos.sqlite');

$count = $conexion->exec("INSERT INTO Favoritos(Usuario,Contrasena,Titulo,Direccion,Categoria,Comentario,Valoracion) VALUES ('jocarsa','jocarsa','Google','http://www.google.com','Tecnologia','Este es un buscador famoso',10)");
$count = $conexion->exec("INSERT INTO Favoritos(Usuario,Contrasena,Titulo,Direccion,Categoria,Comentario,Valoracion) VALUES ('jocarsa','jocarsa','JOCARSA','http://www.jorasca.com','Tecnologia','Esta es mi pagina ',10)");



//Cerrar conexion




//CREAR UNA TABLA DE USUARIOS----------------------
//Conexion

$conexion = new PDO('sqlite:favoritos.sqlite');
//Crear una tabla
$consulta = '
 CREATE TABLE Usuarios (
Usuario varchar(20) NOT NULL,
Contrasena varchar(50) NOT NULL,
Nombre varchar(50) NOT NULL,
Apellido varchar(50) NOT NULL,
Edad Int,
Permisos Int )';

$conexion=$conexion->exec($consulta);

//Insertar contenido en la tabla
$conexion = new PDO('sqlite:favoritos.sqlite');

$count = $conexion->exec("INSERT INTO Usuarios(Usuario,Contrasena,Nombre,Apellido,Edad,Permisos) VALUES ('jocarsa','jocarasa','Diego','Martinez',20,1)");
$count = $conexion->exec("INSERT INTO Usuarios(Usuario,Contrasena,Nombre,Apellido,Edad,Permisos) VALUES ('jocarsa','jocarasa','Marisol','Daza',18,2)");
$count = $conexion->exec("INSERT INTO Usuarios(Usuario,Contrasena,Nombre,Apellido,Edad,Permisos) VALUES ('jocarsa','jocarasa','Diana','Bautista',21,3)");





//Cerrar conexion


$conexion = new PDO('sqlite:favoritos.sqlite');
//Crear una tabla
$consulta = '
 CREATE TABLE Logs (
Utc Int,
Anio Int,
Mes Int,
Dia Int,
Hora Int,
Minuto Int,
Segundo Int,
Ip char(50),
Navegador char(50),
Usuario char(20),
Contrasena char(50)  )';

$conexion=$conexion->exec($consulta);

//Insertar contenido en la tabla
$conexion = new PDO('sqlite:favoritos.sqlite');

$count = $conexion->exec("INSERT INTO Logs(Utc,Anio,Mes,Dia,Hora,Minuto,Segundo,Ip,Navegador,Usuario,Contrasena) VALUES (000000,2015,02,07,21,03,00,'127.0.01','Chrome','jocarsa','jocarsa')");





?>