<?php

$archivo = "Text.txt";
$contenido = "ADSI-68113 SENA-CIMM";

$manejador =fopen($archivo, 'a+');
fwrite($manejador,$contenido);

?>