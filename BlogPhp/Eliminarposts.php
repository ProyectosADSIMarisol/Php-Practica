<?php

$conexion = new PDO('sqlite:blogs.sqlite');

$codigoutc = $_GET['Utc'];



$consulta="DELETE fROM Posts WHERE Utc='".$codigout."'";

$borrar = $conexion->exec($consulta);

/*echo "
<html>
<head>
<meta http-equiv='REFRESH' content='0; url=Index.php'>
</head>
</html>";

*/


?>