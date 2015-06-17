<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Curso Php</title>
</head>
<center>
<header> <h1> Bases Del Lenguaje Php  </h1></header>

<header> <h1> Controles  </h1></header>
</center>
<body bgcolor="#D8BFD8">


<fieldset>
<h3>If</h3>
<?php
$miVariable ="rojo";
if ($miVariable == "negro") 
{
	echo "El color si es rojo";
}
else
{
echo "El color parece que no coincide";
}
?>
</fieldset>

<br>
<fieldset>
<h3> For</h3>
	<?php

for($numero=5; $numero<=20;$numero=$numero+2)
{
echo "Hace ".$numero." veces que paso por aqui <br>";
}

echo "La operacion ha finalizado";

?>	
</fieldset>


<br>
<fieldset>
<h3> Switch</h3>
	<?php
$miVariable = 1;
switch ($miVariable) {
	case (1):
		echo "La variable es igual a 1";
		break;
	case (2):
		echo "La variable es igual a 2";
		break;
case (3):
	echo "La variable es igual a Hola Mundo!";
	break;
	
	
}

?>	
</fieldset>

<br>
<fieldset>
<h3> While</h3>
	<?php
$variable = 0;
while ( $variable<= 4) {
	echo "Hola Mis ADSI-681113 <br>";
	$variable = $variable + 1;
}
	
?>	
</fieldset>

<br>
<fieldset>
<h3> Do While</h3>
	<?php
$variable = 1;
do
{
echo "Hola";
}
while ( $variable > 2) ;

	echo "Ya he finalizado";


	
?>	
</fieldset>

<br>
<fieldset>
<h3> Goto</h3>
	<?php
	 Goto marca;
	 echo ADSI-681113;
	 marca:

	 echo "Analisis y Desarrollo de Sistemas de Informacion";
?>	
</fieldset>

<fieldset>
<h3> Foreach</h3>
	<?php
	 $matriz = array
	 ("Manzana","Pera","Piña","Durazno","Fresa");
	 foreach ($matriz as $valor) {
	 	echo $valor."<br/>";
	 }
?>	
</fieldset>

</body>

</html>