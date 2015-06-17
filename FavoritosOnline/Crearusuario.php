<?php

session_start();
$contador = 0;

$usuario = $_POST['Usuario'];
$contrasena =$_POST['Contrasena'];
$nombre = $_POST['Nombre'];
$apellido =$_POST['Apellido'];
$edad = $_POST['Edad'];

$conexion = new PDO('sqlite:favoritos.sqlite');
$consulta = "SELECT * FROM Usuarios";
$resultado =$conexion->query($consulta);

foreach ($resultado as $row) 
{
	if($row['usuario']== $usuario)
	{
$contador++;

	}else{}
}

if($contador == 0)
{


$conexion = new PDO('sqlite:favoritos.sqlite');


$consulta = "INSERT INTO  Usuarios VALUES ('$usuario','$contrasena','$nombre','$apellido','$edad',3);";

$resultado = $conexion-> query($consulta);

echo '
<hmtl>
<head>
<meta http-equiv="REFRESH" content="0;url=Gestionusuarios.php"
</head>
</hmtl>




';


} else
{

echo "el nombre de usuario que has elegido ya existe. Elige otro";

}




?>