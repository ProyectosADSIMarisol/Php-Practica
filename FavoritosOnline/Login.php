<?php

session_start();


$usuario = $_POST['Usuario'];
$contrasena =$_POST['Contrasena'];

$conexion = new PDO('sqlite:favoritos.sqlite');


$consulta = "SELECT * FROM Usuarios;";

$resultado = $conexion-> query($consulta);

foreach ($resultado as $row) {

$usuariobasedatos = $row['Usuario'];
$contrasenabasedatos = $row['Contrasena'];
$permisosenbase = $row['Permisos'];

if ($usuario==$usuariobasedatos & $contrasena==$contrasenabasedatos)
 {

$_SESSION['Usuario'] = $usuario;
$_SESSION['Contrasena'] =$contrasena;
$_SESSION['Permisos'] =$permisosenbase;

echo'
<hmtl>
<head>
<meta http-equiv="REFRESH" content="0;url=Principal.php"
</head>
</hmtl>
';
}
else 
{

}


}

?>