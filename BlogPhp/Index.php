<?php

session_start();

include "Variablesusuario.php";


echo 
$_SESSION['Nombre'].$_SESSION['ApellidoUno'];


if(isset($_GET['Editando'])){

$Editando = $_GET['Editando'];

}

else  
{

$Editando = "no";


}
?>