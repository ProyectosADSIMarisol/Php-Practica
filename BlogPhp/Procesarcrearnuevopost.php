<?php

session_start();
$usuario = $_SESSION['Usuario'];
$tituloform=$_POST['titulopost'];
$subtituloform=$_POST['subtitulopost'];
$textoform=$_POST['contenidopost'];

$postutc = date('U');
$postanio = date('Y');
$postmes = date('m');
$postdia = date('d');
$posthora = date('H');
$postminuto = date('i');
$postsegundo = date('s');

$conexion = new PDO('sqlite:blogs.sqlite');

$count = $conexion->exec("INSERT INTO Posts VALUES ('$postutc','$postanio','$postmes','$postdia','$posthora','$postminuto ','$postsegundo','$tituloform','$subtituloform','',$textoform','','','')");





?>