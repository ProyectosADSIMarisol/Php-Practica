<?php

$conexion = new PDO('sqlite:blogs.sqlite');
$_SESSION['usuariotemporal'] = "jocarsa";

$consulta = ("SELECT * FROM Posts WHERE Usuario='".$_SESSION['usuariotemporal']."' ORDER BY DESC;");
//ejecutar consulta
$consulta=$conexion->query($consulta);

/*foreach ($consulta as $row) 
{

echo "
<article>
<div id='logov2b'></div>
<time>".$row['Anio']."-".$row['Mes']."-".$row['Dis']." </time>
<h3>".$row['Titulo']. "</h3>
<h4>".$row['SubTitulo']." </h4>
<p> ".$row['Texto']." </p>

Eliminarposts.php?Utc".$row['Utc']."'> Eliminar </a></br>
<br> <a href="Eliminarposts.php?titulomod=".$row['Titulo']."&suttitulomod=".$row['SubTitulo']."&textomod=".$row['Texto']."'>Modificar</a></br>


</article>




";


}






*/


?>