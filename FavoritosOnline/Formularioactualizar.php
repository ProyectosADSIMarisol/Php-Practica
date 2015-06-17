<?php

session_start();

//Recupero variables

$usuario = $_SESSION['Usuario'];
$contrasena = $_SESSION['Contrasena'];

$titulo = $_GET['Titulo'];
$direccion = $_GET['Direccion'];
$categoria = $_GET['Categoria'];
$comentario = $_GET['Comentario'];
$valoracion = $_GET['Valoracion'];

$conexion = new PDO('sqlite:favoritos.sqlite');


$consulta = "SELECT * FROM Favoritos WHERE Titulo='".$titulo."' AND Direccion='".$direccion."' AND Categoria='".$categoria."' AND Comentario='".$comentario."' AND Valoracion=".$valoracion."";
$conexion = new PDO('sqlite:favoritos.sqlite');

echo"

<table border=1 width=100%>
<tr>
	<td>Titulo</td>
	<td>Direccion</td>
	<td>Categoria</td>
	<td>Comentarios</td>
	<td>Valoracion</td>

</tr>

";
$result = $conexion->query($consulta);

foreach ($result as $fila) {

echo"

<tr><form action='Actualizar.php' method='post'>
	<td><input type='text' name='Titulo' value='".$fila['Titulo']."'></td>
	<td><input type='text' name='Direccion' value='".$fila['Direccion']."'></td>
	<td>
	<select name='categoria'>
		<option value='salud'>Salud</option>
		<option value='trabajo'>Trabajo</option>
		<option value='hobby'>Hobby</option>
		<option value='personal'>Personal</option>
		<option value='otros'>Otros</option>
		<option value='".$fila['Categoria']."' selected>".$fila['Categoria']."</option>
	</select>
	</td>
	<td><input type='text' name='Comentario' value='".$fila['Comentario']."'></td>
	<td><input type='text' name='Valoracion' value='".$fila['Valoracion']."'></td><td><input type='submit'</td>
	</form>
</tr>

";

}

echo "</table>";

$_SESSION['titulo'] = $titulo;



?>




