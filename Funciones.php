<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Curso Php</title>
</head>
<center>
<header> <h1> Bases Del Lenguaje Php  </h1></header>

<header> <h1> Creacion de una funcion </h1></header>
</center>
<body bgcolor="#D8BFD8">

<fieldset>
<h3>Funcion</h3>
<?php

function mifuncion()
{
echo "Marisol Daza Bautista";
echo"<br>";
echo "Estudio en SENA-CIMM";

echo"<br>";
echo "ADSI-68113<br>";
}
mifuncion();

/* mifuncion(); */
?>
</fieldset>

<br>

<fieldset>
<h3>Funciones con parametros</h3>
<?php
//con esta funcion preparo una tabla de multiplicar

function mitabla($numero)
{
for ($multiplicador=0; $multiplicador<=10; $multiplicador++) 
{ 
	echo $numero." x ".$multiplicador." = ".$numero*$multiplicador."<br>";

}


}
//con este  for calculo  todas las tablas de multiplicar
for ($otronumero=0; $otronumero <=10 ; $otronumero++) { 
	echo "Tabla De ".$otronumero.":<br>";

	mitabla($otronumero);
}


//mitabla(5);

?>
</fieldset>


<fieldset>
<h3>Ambito</h3>
<?php

$var ="Hola ADSI-681113";
function hola()
{
global $var;
echo $var;
}

hola();

?>
</fieldset>


</body>

</html>