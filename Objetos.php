<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Curso Php</title>
</head>
<center>
<header> <h1> Bases Del Lenguaje Php  </h1></header>

<header> <h1> Orientacion a objetos</h1></header>
</center>
<body bgcolor="#D8BFD8">

<fieldset>
<h3>Clases metodos y atributos</h3>
<?php

class primerobjeto{

var $variableuno;
var $variabledos;


function metodo1()
{

}
function metodo2($parametro1,$parametro2){

}
}
?>
</fieldset>
<br>

<fieldset>
<h3>Creacion de un primer objeto</h3>
<?php
/**
* 
*/
class dimealgo
{
	
	function dimealgo($algo)
	{
	echo "Lo que te voy a decir es esto:  ".$algo;
	}
}
   $decir = new dimealgo ("Hola ADSI");

?>
</fieldset>
<br>

<fieldset>
<h3>Metodos que usan atributos</h3>
<?php
class dime{
var $atributo;
function dime($algo)
{
$this->atributo = $algo;
echo $this->atributo;
}}

$decir = new dime("Analisis y Desarrollo de Sistemas de Informacion");



?>
</fieldset>
<br>

<fieldset>
<h3>Llamando a un metodo concreto</h3>
<?php
  class fruta

  {
function manzana() {echo "Yo soy una manzana verde";}
function durazno() {echo "Yo soy un durazno";}
  }

$saludable = new fruta();
$sal = $saludable->durazno();


?>
</fieldset>

<br>

<fieldset>
<h3>Herencia de clases</h3>
<?php
  class frutauno

  {
function manzana() {echo "Yo soy una manzana verde";}
function durazno() {echo "Yo soy un durazno";}
  }

  class subfruta extends frutauno 
  {
var $atributo;
function soyfruta()
{
  }
}

$saludable = new subfruta();
$sal = $saludable->durazno();


?>
</fieldset>








</body>

</html>