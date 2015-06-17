<?php


session_start();
echo "Tu Usuario Es: ";
 echo  

echo "<br>";
echo "Tu Contrasena Es: ";
 echo $_SESSION['Contrasena'] ="jocarsa";

//Crear conexion
$conexion = new PDO('sqlite:favoritos.sqlite');


 //establecer consulta


$consulta = "SELECT * FROM Favoritos  where Usuario='".$_SESSION['Usuario']."' and Contrasena='".$_SESSION['Contrasena']."';";

//ejecutar consulta
$data=$conexion->query($consulta);


//imprimir la consulta

echo "
<table border=3px width=100%>
	 <tr>
     <td>Titulo</td>
     <td>Direccion</td>
     <td>Categoria</td>
     <td>Comentario</td>
     <td>Valoracion</td>
     </tr>";


foreach ($data as $row) {

echo "<tr>
      <td>".$row['Titulo']."</td>
      <td>".$row['Direccion']."</td>
      <td>".$row['Categoria']."</td>
      <td>".$row['Comentario']."</td>
      <td>".$row['Valoracion']."</td>
    <td><a href='Eliminar.php?Titulo=".$row['Titulo']."&Direccion=".$row['Direccion']."&Categoria=".$row['Categoria']."&Comentario=".$row['Comentario']."&Valoracion=".$row['Valoracion']."'>Eliminar</a></td>
	<td><a href=Formularioactualizar.php?Titulo=".$row['Titulo']."&Direccion=".$row['Direccion']."&Categoria=".$row['Categoria']."&Comentario=".$row['Comentario']."&Valoracion=".$row['Valoracion']."'>Actualizar</a></td>

</tr>";


}


echo "
<tr>
<form action='crearfavorito.php' method='POST'>
<td><input type='text' name='Titulo'></td>
<td><input type='text' name='Direccion'></td>
<td><select name='Categoria'>
<option value='salud'>Salud</option>
<option value='trabajo'>Trabajo</option>
<option value='hobby'>Hobby</option>
<option value='personal'>Personal</option>
<option value='otros'>Otro</option>
</select>
</td>
<td><input type='text' name='Comentario'></td>
<td><input type='text' name='Valoracion'></td>
<td><input type='submit'></td>
<td></td>
</tr>"
;


echo "</table>";
 //cerramos la conexion
///socializo

$conexion = null;
////////////////////////////////////////////////////////
echo "<br>";
function muestraCategoria($damecategoria){
echo "Algunos links de la categoria ".$damecategoria." que te puedan interesar<br>";
$conexion = new PDO('sqlite:favoritos.sqlite'); 
$consulta = "SELECT * FROM Favoritos WHERE Usuario != '".$_SESSION['Usuario']."' AND Categoria= '".$damecategoria."' ORDER BY RANDOM() LIMIT 3;";
$result = $conexion->query($consulta);
echo "<table border=1 width=100%>
<tr>
<td>Titulo</td>
<td>Direccion</td>
<td>Categoria</td>
<td>Comentario</td>
<td>Valoracion</td>
<td></td>
<td></td>
</tr>";
foreach($result as $fila){
  
  echo "<tr>
  <td>".$fila['Titulo']."</td>
  <td>".$fila['Direccion']."</td>
  <td>".$fila['Categoria']."</td>
  <td>".$fila['Comentario']."</td>
  <td>".$fila['Valoracion']."</td>
  <td></td>
  <td></td>";
  
}
echo "</table><br>";
$conexion = NULL;
}
muestraCategoria("salud");
muestraCategoria("trabajo");
muestraCategoria("hobby");
muestraCategoria("personal");
muestraCategoria("Tecnologia");
muestraCategoria("Otro");


?>