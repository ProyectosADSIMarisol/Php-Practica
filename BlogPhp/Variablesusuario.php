<?php
$_SESSION['usuariotemporal'] = "jocarsa";
$conexion = new PDO('sqlite:blogs.sqlite');

$consulta = ("SELECT * FROM Usuarios WHERE Usuario='".$_SESSION['usuariotemporal']."';");
//ejecutar consulta
$consulta=$conexion->query($consulta);


foreach ($consulta as $row) 
{

$_SESSION['Usuario'] = $row['Usuario'];
$_SESSION['Nombre'] = $row['Nombre'];
$_SESSION['ApellidoUno'] = $row['ApellidoUno'];
$_SESSION['ApellidoDos'] = $row['ApellidoDos'];
$_SESSION['Titulo'] = $row['Titulo'];
$_SESSION['Descripcion'] = $row['Descripcion'];
$_SESSION['Foto'] = $row['Foto'];
$_SESSION['Webpersonal'] = $row['Webpersonal'];
$_SESSION['Email'] = $row['Email'];
$_SESSION['Permisos'] = $row['Permisos'];


}











?>