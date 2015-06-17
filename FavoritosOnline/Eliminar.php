<?php

session_start();

$conexion = new PDO('sqlite:favoritos.sqlite');
$usuario = $_SESSION['Usuario'];
$contrasena =$_SESSION['Contrasena'];

$titulo = $_GET['Titulo'];
$direccion = $_GET['Direccion'];
$categoria = $_GET['Categoria'];
$comentario = $_GET['Comentario'];
$valoracion = $_GET['Valoracion'];

$conexion = new PDO('sqlite:favoritos.sqlite');


$consulta="delete from favoritos where Usuario='".$usuario."' AND Contrasena='".$contrasena."' AND Titulo='".$titulo."' AND Direccion='".$direccion."' AND Categoria='".$categoria."' AND Comentario='".$comentario."' and Valoracion='".$valoracion."'";

$resultado = $conexion-> exec($consulta);


echo'
<hmtl>
<head>
<meta http-equiv="REFRESH" content="0;url=Principal.php"
</head>

</hmtl>
';




?>