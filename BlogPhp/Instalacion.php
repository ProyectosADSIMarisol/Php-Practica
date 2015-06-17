<?php
//Crear tabla usuarios

$conexion = new PDO('sqlite:blogs.sqlite');


$consulta = '
 CREATE TABLE Usuarios (
Usuario varchar(20) NOT NULL,
Contrasena varchar(50) NOT NULL,
Nombre varchar(50) ,
ApellidoUno varchar(50),
ApellidoDos varchar(50),
Titulo varchar(50),
Descripcion varchar(1050),
Foto varchar(50),
Webpersonal varchar(50),
Email varchar(50),
Permisos Int )';

$conexion=$conexion->exec($consulta);


$conexion = new PDO('sqlite:blogs.sqlite');


$consulta = $conexion->exec("INSERT INTO Usuarios(Usuario,Contrasena,Nombre,ApellidoUno,ApellidoDos,Titulo,Descripcion,Foto,Webpersonal,Email,Permisos) VALUES ('jocarsa','jocarsa','Marisol','Daza','Bautista','Creativo Multimedia','Descripcion','marisoldazabautista','http://marisoldazabautista.com','dazabautistamary@gmil.om',1)");

//Crear tabla configuracion usuarios


$conexion = new PDO('sqlite:blogs.sqlite');


$consulta = '
 CREATE TABLE ConfigUsuarios (
Usuario char(20),
Piel char(50),  
Respuestas char(50)
)';

$conexion=$conexion->exec($consulta);

$conexion = new PDO('sqlite:blogs.sqlite');


$consulta = $conexion->exec("INSERT INTO ConfigUsuarios(Usuario,Piel,Respuestas) VALUES('jocarsa','default','si')");



//crear tabla post
$conexion = new PDO('sqlite:blogs.sqlite');
$consulta = '
 CREATE TABLE Posts (
Utc Int,
Anio Int,
Mes Int,
Dia Int,
Hora Int,
Minuto Int,
Segundo Int,
Titulo char(120),
SubTitulo char(200),
Icono char(80),
Texto char(4000),
Imagen char(50),
Video char(50), 
Sonido char(200))';

$conexion=$conexion->exec($consulta);

$conexion = new PDO('sqlite:blogs.sqlite');


$consulta = $conexion->exec("INSERT INTO Posts(Utc,Anio,Mes,Dia,Hora,Minuto,Segundo,Titulo,SubTitulo,Icono,Texto,Imagen,Video,Sonido) VALUES(000000,2011,02,10,11,55,00,'Este es un primer post','Bienvenido a tu blog','marisol','Este es el primer blog','Imagen','Video','Sonido')");


//crear tabla logs
$conexion = new PDO('sqlite:blogs.sqlite');


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
Operacion char(50)  )';

$conexion=$conexion->exec($consulta);
$conexion = new PDO('sqlite:blogs.sqlite');
$consulta = $conexion->exec("INSERT INTO Logs(Utc,Anio,Mes,Dia,Hora,Minuto,Segundo,Ip,Navegador,Usuario,Operacion) VALUES(000000,2011,02,10,11,55,00,'127.0.01','Chrome','jocarsa','crear')");




?>