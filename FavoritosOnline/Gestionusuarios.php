<?php


session_start();

//$codigo = $_SESSION['Permisos'];
//if($codigo == 1)
//{
echo "Tu Usuario Es: ";
 echo $_SESSION['Usuario'] = "jocarsa";


echo "<br>";
echo "Tu Contrasena Es: ";
 echo $_SESSION['Contrasena'] ="jocarsa";

//Crear conexion
$conexion = new PDO('sqlite:favoritos.sqlite');


 //establecer consulta


$consulta = "SELECT * FROM Usuarios ;";

//ejecutar consulta
$data=$conexion->query($consulta);


//imprimir la consulta

echo "
<table border=3px width=100%>
	 <tr>
     <td>Usuario</td>
     <td>Contrasena</td>
     <td>Nombre</td>
     <td>Apellido</td>
     <td>Edad</td>
     </tr>";


foreach ($data as $row) {

echo "<tr>
      <td>".$row['Nombre']."</td>
      <td>".$row['Contrasena']."</td>
      <td>".$row['Nombre']."</td>
      <td>".$row['Apellido']."</td>
      <td>".$row['Edad']."</td>
      
    <td><a href='Eliminarusuario.php?Usuario=".$row['Usuario']."&Contrasena=".$row['Contrasena']."&Nombre=".$row['Nombre']."&Apellido=".$row['Apellido']."&Edad=".$row['Edad']."'>Eliminar</a></td>
	<td><a href=Actualizarusuario.php?Usuario=".$row['Usuario']."&Contrasena=".$row['Contrasena']."&Nombre=".$row['Nombre']."&Apellido=".$row['Apellido']."&Edad=".$row['Edad']."'>Actualizar</a></td>

</tr>";


}


echo "
<tr>
<form action='Crearusuario.php' method='POST'>
<td><input type='text' name='Usuario'></td>
<td><input type='text' name='Contrasena'></td>
<td><input type='text' name='Nombre'></td>
<td><input type='text' name='Apellido'></td>
<td><input type='text' name='Edad'></td>

<td><input type='submit'></td>
<td></td>
</tr>";


//}else {
  
  //echo 'tu no ere administrador';
//}



 //cerramos la conexion


?>