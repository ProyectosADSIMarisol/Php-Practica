<html>
<head>
	<meta charset="UTF-8">
</head>
</html>
<?php

session_start();
//recuperra variables
$usuario = $_SESSION['Usuario'];
$contrasena = $_SESSION['Contrasena'];

$usuario = $_GET['Usuario'];
$contrasena = $_GET['Contrasena'];
$nombre = $_GET['Nombre'];
$apellido = $_GET['Apellido'];
$edad = $_GET['Edad'];

//establecer conexion
$conexion = new PDO('sqlite:favoritos.sqlite');



$consulta = "SELECT * FROM Usuarios WHERE Usuario='".$usuario."' AND Contrasena='".$contrasena."' AND Nombre='".$nombre."' AND Apellido='".$apellido."' AND Edad = '".$edad."'";


$update = $conexion->query($consulta);

//
echo '
<table border=1 width=100%>
<tr>
<td>Usuario</td>
<td>Contraseña</td>
<td>Nombre</td>
<td>Apellido</td>
<td>Edad</td>
<td></td>
</tr>';

foreach($update as $fila)
{echo "
<tr>
<form action='Actualizarusuario.php' method='POST'>
<td><input type='text' name='Usuario' value='".$fila['Usuario']."'></td>
<td><input type='text' name='Contrasena' value= '".$fila['Contrasena']."'></td>
<td><input type='text' name='Nombre' value= '".$fila['Nombre']."'></td>
<td><input type='text' name='Apellido' value= '".$fila['Apellido']."'></td>
<td><input type='text' name='Edad' value= '".$fila['Edad']."'></td>
<td><input type='submit'></td>
<td></td>
</form>
</tr>
";
}

echo "</table>";
$_SESSION['usuario'] = $usuario;
//$conexion = NULL;
            
?>

