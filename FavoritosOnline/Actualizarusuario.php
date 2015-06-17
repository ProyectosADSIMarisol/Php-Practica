<html>
<head>
	<meta charset="UTF-8">
</head>
</html>
<?php
session_start();
$conexion = new PDO('sqlite:favoritos.sqlite');

$usuario = $_POST['Usuario'];
$contrasena = $_POST['Contrasena'];
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$edad = $_POST['Edad'];

$usuarioantiguo = $_SESSION['Usuario'];
$consulta = "UPDATE Usuarios SET Usuario='".$usuario."', Contrasena='".$contrasena."', Nombre='".$nombre."', Apellido='".$apellido."', Edad='".$edad."' WHERE Usuario ='".$usuarioantiguo."'";
$update = $conexion->query($consulta);
////echo "
//<html>
//<head>
//<meta http-equiv='REFRESH' content='0; url=Formularioactuali.php.php'>
//</head>
//</html>";
$conexion = NULL;
?>