<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Curso Php</title>
</head>
<center>
<header> <h1> Bases Del Lenguaje Php  </h1></header>

<header> <h1> Fechas</h1></header>
</center>
<body bgcolor="#D8BFD8">



<fieldset>
<h3>Parametros de fecha</h3>
<?php


echo date ("d")."<br>"; //DEVUELVE EN EL DIA EN QUE ESTAMOS CON DOS DIGITOS Y VISUALIZANDO CERO
echo date ("j")."<br>"; //MUESTRA SOLO UN DIGITO SIN CEROS AL PRINCIPIO
echo date ("D")."<br>"; //TEXTO SECUENCIA TRES LETRAS EN INGLES
echo date ("l")."<br>"; // MUESTRA LA PALABRA DEL DIA DE LA SEMNA COMPLETA
echo date ("N")."<br>"; // DIA NUMERO 3 DE LA SEMANA EN EL QUE ME ENCUENTRO
echo date ("w")."<br>";// DIA NUMERO 3 DE LA SEMANA
echo date ("z")."<br>"; //DIA RESPECTO AL AÑO
echo date ("W")."<br>";//EL NUMERO DE LA SEMANA DEL AÑO
echo date ("F")."<br>";//MES DEL AÑO
echo date ("m")."<br>";//MES DEL AÑO EN NUMERO
echo date ("M")."<br>";//MES DEL AÑO TRES PRIMERAS LETRAS
echo date ("N")."<br>";// NUMERO MES 
echo date ("t")."<br>";//NUMERO DIAS MES DEL AÑO

echo date ("Y")."<br>";// AÑO ACTUAL
echo date ("y")."<br>";// DOS ULTIMOS NUMEROS DEL AÑO
echo date ("L")."<br>";// AÑO BICIESTO
echo date ("c")."<br>";//FECHA  FORMATO AÑO MES DIA HORA MINUTO SEGUNDO Y LA DIFERENCIA
echo date ("U")."<br>";//SEGUNDOS DE LA EPOCA JUNIERS
?>


</fieldset>
 <br>
<fieldset>
<h3>Parametros de tiempo</h3>
<?php
echo  date ("a")."<br>"; // AM / PM
echo  date ("A")."<br>"; // VALORES MAYUSCULA
echo  date ("B")."<br>"; // HORA QUE ES FORMATO SUACH
echo  date ("g")."<br>";// HORA DEL DIA FORMATO DE 1 A 12 HORAS
echo  date ("G")."<br>"; // HORA DEL DIA EN UN FORMATO DE 1 A 24
echo  date ("h")."<br>";//HORA DEL DIA CERO INICIAL
echo  date ("H")."<br>";//HORA DEL DIA  CERO INICIAL FORMATO 24 HORAS
echo  date ("i")."<br>";//MINUTOS CON CEROS
echo  date ("s")."<br>"; // LOS SEGUNDOS
echo  date ("u")."<br>"; // LOS MIcrosegundos
echo  date ("e")."<br>"; // ZONA HORARIA
echo  date ("I")."<br>"; // SI ESTAMOS EN EL HORARIO DE CAMBIO DE TIEMPO CAMBIO SOLAR
echo  date ("O")."<br>"; // DIFERENCIA ZONA HORARIA
?>
</fieldset>
 <br>
<fieldset>
<h3>Formulacion de una fecha</h3>
<?php
echo "Hoy es ".date("l").",".date("j")." de".date("F")." de".date("Y");
?>
</fieldset>

<br>
<fieldset>
<h3>Fechas en castellano</h3>
<?php
function dametiempo()
{

switch (date ("l")) {
	case "Monday":
		$dia = "Lunes";
		break;

		case "Tuesday":
		$dia = "Martes";
		break;

		case "Wednesday":
		$dia = "Miercoles";
		break;

		case "Thuesday":
		$dia = "Jueves";
		break;

		case "Friday":
		$dia = "Viernes";
		break;

	case "Saturday":
		$dia = "Sabado";
		break;

		case "Sunday":
		$dia = "Domingo";
		break;

}



switch (date("F")) {
	case 'January':
		$mes= "Enero";
		break;

		case 'Febrary':
		$mes= "Febrero";
		break;

	
		case 'March':
		$mes= "Marzo";
		break;
	

	case 'April':
		$mes= "Abril";
		break;
	

	case 'May':
		$mes= "Mayo";
		break;
	
	case 'June':
		$mes= "Junio";
		break;
	
	case 'July':
		$mes= "Julio";
		break;
	
	case 'August':
		$mes= "Agosto";
		break;
	
	case 'September':
		$mes= "Septiembre";
		break;

		case 'October':
		$mes= "Octubre";
		break;
	
	case 'November':
		$mes= "Noviembre";
		break;
	
	case 'December':
		$mes= "Diciembre";
		break;
	
	
	
	
}
echo "Hoy es ".$dia.",".date("j")." de".$mes." de".date("Y");

}

dametiempo();


?>
</fieldset>


</body>

</html>