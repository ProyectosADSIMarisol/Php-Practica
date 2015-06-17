<?php

session_start();

//crear variables


 $usuario = $_SESSION['Usuario'];
$contrasena =$_SESSION['Contrasena'];

$addtitulo = $_POST['Titulo'];
$adddireccion = $_POST['Direccion'];
$addcategoria = $_POST['Categoria'];
$addcomentario = $_POST['Comentario'];
$addvaloracion = $_POST['Valoracion'];


$conexion = new PDO('sqlite:favoritos.sqlite');


$count = $conexion->exec("INSERT INTO Favoritos VALUES ('$usuario','$contrasena','$addtitulo','$adddireccion','$addcategoria','$addcomentario ','$addvaloracion')");



$conexion = new PDO('sqlite:favoritos.sqlite');

echo'
<hmtl>
<head>
<meta http-equiv="REFRESH" content="0;url=Principal.php"
</head>

</hmtl>
';






?>