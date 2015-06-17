<?php

session_start();

$conexion = new PDO('sqlite:favoritos.sqlite');

$usuario = $_SESSION['Usuario'];
$contrasena = $_SESSION['Contrasena'];
$titulo = $_POST['Titulo'];
$direccion = $_POST['Direccion'];
$categoria = $_POST['Categoria'];
$comentario = $_POST['Comentario'];
$valoracion = $_POST['Valoracion'];


$tituloantiguo = $_SESSION['Titulo'];

$consulta = "UPDATE Favoritos SET Titulo='".$titulo."', Direccion='".$direccion."', Categoria='".$categoria."', Comentario='".$comentario."', Valoracion='".$valoracion."' WHERE titulo='".$tituloantiguo."'";

$conexion = $conexion -> query($consulta);


echo'
<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=Principal.php">
	</head>
</html>
';

?>


