<?php
$titulomod = $_GET['titulomod'];
$subtitulomod = $_GET['subtitulomod'];
$textomod= $_GET['textomod'];



?>


<article style="background:rgba(0,255,0,0.2)">

<div id='logov2b'></div>

<form action="Actualizarpost.php" method="post">
<h3>Titulo Del Post:
<input type="text" name="titulopostactualizar" value="<?php echo $titulomod  ?>"></h3>


<h4>SubTiulo Del Post:
<input type="text" name="subtitulopostactualizar" value="<?php echo $subtitulomod  ?>"></h3>
</h4>
<P>Contenido:
<input type="text" name="contenidopostactualizar" value="<?php echo $textomod  ?>"></p>
<input type="submit">

</form>
</article>