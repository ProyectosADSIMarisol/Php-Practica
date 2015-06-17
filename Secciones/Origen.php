<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Curso Php</title>
</head>
<center>
<header> <h1> Bases Del Lenguaje Php  </h1></header>

<header> <h1> Crear seccioes y  almacenar datos</h1></header>
</center>
<body bgcolor="#D8BFD8">

<fieldset>
<h3>Secciones</h3>
<?php
session_start();

 $var = "Hola-ADSI";

$_SESSION['segundavariable'] = "Adios";

echo $var;


echo "<a href='Destino.php'> <br> Vamos 68113 </a>";



?>
</fieldset>
<br>







</body>

</html>