<?php
echo"<table border=1 <tr><td>Disco</td><td>Artista</td><td>Año</td></tr>";


$conexion = new PDO('sqlite:bibliotecacd.sqlite');
 
 $consulta = "SELECT * FROM Discos WHERE  Artista='U2' ORDER BY Anio DESC;";

$data=$conexion->query($consulta);

foreach ($data as $row) 
{
echo "<tr> <td>".$row['Disco']."</td> <td>".$row['Artista']."</td> <td>"
.$row['Anio']."</td></tr>";

}




echo "</table>"

?>    