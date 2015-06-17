<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Curso Php</title>
</head>
<center>
<header> <h1> Bases Del Lenguaje Php  </h1></header>

<header> <h1> Almacenar Datos De Matrices</h1></header>
</center>
<body bgcolor="#D8BFD8">

<fieldset>
<h3>Matriz</h3>
<?php

$color[0] = "Azul";
$color[1] = "Violeta";
$color[2] = "Negro";

for ($numero=0; $numero<=2 ; $numero++) { 
	echo $color[$numero]."<br>";
}
?>
</fieldset>
<br>
<fieldset>
<h3>Matrices asociativas y multidimencionales</h3>
<?php
$agenda[0]['nombre'] = "Diego";
$agenda[0]['telefono'] ="3144838122";
$agenda[0]['email'] = "tequiero.com";

$agenda[1]['nombre'] = "Marisol";
$agenda[1]['telefono'] ="3144833456";
$agenda[1]['email'] = "diego.com";

$agenda[2]['nombre'] = "Mauricio";
$agenda[2]['telefono'] ="314128122";
$agenda[2]['email'] = "papa.com";

echo $agenda[0] ['nombre'];

?>
</fieldset>


<br>
<fieldset>
<h3>Listar los elementos de una matriz</h3>
<?php
$agenda[0]['nombre'] = "Diego";
$agenda[0]['telefono'] ="3144838122";
$agenda[0]['email'] = "tequiero.com";

$agenda[1]['nombre'] = "Marisol";
$agenda[1]['telefono'] ="3144833456";
$agenda[1]['email'] = "diego.com";

$agenda[2]['nombre'] = "Mauricio";
$agenda[2]['telefono'] ="314128122";
$agenda[2]['email'] = "papa.com";



for ($indice=0; $indice <=2 ; $indice++) { 
	echo '

<table  border=1 width=300px;
<tr>
<td>
Nombre:
</td>
<td>'.$agenda[$indice]['nombre'].'
</td>
</tr>
<br>
<tr>
<td>
Telefono:
</td>
<td>'.$agenda[$indice]['telefono'].'
</td>
</tr>

<tr>
<td>
Email:
</td>
<td>'.$agenda[$indice]['email'].'
</td>
</tr>
</table>
	';
}



?>
</fieldset>






</body>

</html>