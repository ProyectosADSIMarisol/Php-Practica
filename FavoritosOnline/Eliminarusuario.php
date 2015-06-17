<html>
<head>
	<meta charset="UTF-8">
</head>
</html>
<?php

session_start();
$conexion = new PDO('sqlite:favoritos.sqlite');  

$usuario = $_SESSION['Usuario'];
$contrasena = $_SESSION['Contrasena'];

$usuario = $_GET['Usuario'];
$contrasena = $_GET['Contrasena'];
$nombre = $_GET['Nombre'];
$apellido = $_GET['Apellido'];
$edad = $_GET['Edad'];

$delete = "DELETE 
FROM Usuarios WHERE Usuario='".$usuario."' AND Contrasena='".$contrasena."' AND Nombre='".$nombre."' AND Apellido='".$apellido."' AND Edad='".$edad."'";

$borrar = $conexion->exec($delete);

echo "
<html>
<head>
<meta http-equiv='REFRESH' content='0; url=gestionusuarios.php'>
</head>
</html>";
?>