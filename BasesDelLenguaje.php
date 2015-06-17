<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Curso Php</title>
</head>
<center>
<header> <h1> Bases Del Lenguaje Php  </h1></header>
</center>
<body bgcolor="#D8BFD8">
<fieldset>
<h3>Hola soy un titulo</h3>
<?php
//Esto es un comentario
/*   Todo lo que esta aqui dentro es un comentario  */
echo "hola soy un parrafo";
echo "<br>";
echo 3+3;
?>
</fieldset>
<br> 
<fieldset>
<h3>Definir Variables</h3>
<?php
$mivariable ="Hola Variable";
echo "$mivariable";
echo "<br>";
$miValor="2";
echo "La multiplicacion es: ". 3*$miValor;
?>
</fieldset>

<br>
<fieldset>
<h3> Variables De Formularios</h3>
	<form action="Capitulo2.php" method="POST">
		Digite Su Nombre:
		<input type="text" name="nombre" required="required" onKeypress="if (event.keyCode > 45 && event.keyCode < 57) event.returnValue = false;"><br><br>
		Digite Su Apellido:
		<input type="text" name="apellido" required="required" onKeypress="if (event.keyCode > 45 && event.keyCode < 57) event.returnValue = false;"><br><br>
		<input type="submit" value="Enviar">
		<br><br>
			
		</form>
		<?php
		if (isset($_POST['nombre'])&&($_POST['apellido'])){ 
		
echo "Tu nombre es: ".$_POST['nombre']."<br><br>";
echo "Tu apellido es: ".$_POST['apellido'];

}
?>	
</fieldset>

<br>
<fieldset>
<h3> Enteros Y Coma Flotante</h3>
	<?php
	$entero=5;
	echo "Numero Entero ".$entero;
	$decimal= 5.4778;
	echo "<br> Numero Decimal  ".$decimal;
	$cientifica= 3e4;

	echo "<br>Notacion Cientifica de de 3 e 4 ".$cientifica;
	?>
</fieldset>


<br>
<fieldset>
<h3>Booleanos</h3>
	<?php
	$booleana = false;
	echo "El valor de la variable es ".$booleana;
	?>
</fieldset>

<br>
<fieldset>
<h3>Recabar informacion de nuestros visitantes</h3>
	<?php
	
	@$tuip= getenv(REMOTE_ADDR);
	echo "La IP de esta maquina es: ".($tuip)."<br>";

	$navegador=$_SERVER["HTTP_USER_AGENT"];
	echo "Y tu  sistema operativo y el navegador es: ".$navegador;
	?>
</fieldset>

<br>
<h1>Cadenas Y Comillas Dobles</h1>
<fieldset>
	<?php
	echo "Soy una cadena  'cadena'<br>";
	echo 'Soy una cadena  "cadena"<br>';
	echo "Soy una \"cadena\" y estoy obligada<br>";
	echo "yo soy una linea
	y yo soy otra";

?>
</fieldset>




	<br>
	<h1>Operadores</h1>
	<fieldset>
	<h3>Aritmeticos</h3>
	<?php
	echo "La suma de 4+4 es: ";
	echo 4+4;
	echo "<br>";
	echo  "La resta de 10-7 es: ";
	echo 10-7;
	echo "<br>";
	echo  "La multiplicacion de 8*8 es: ";
	echo 8*8;
	echo "<br>";
	echo  "La division de 40 entre 5 es: ";
	echo 40/5;
	echo "<br>";
	echo "El resto de la division de 20 entre 6 es: ";
	echo 20%6;

	$hola = 2;
	echo $hola++;

	?>	
	</fieldset>




	<br>
	<fieldset>
		<h3>Post-Incremento  Y Post-Decremento</h3>
	<?php
	echo "<p>Incremento</p>";
	$incremento=2;
	echo $incremento++;echo"<br>";
	echo $incremento++;echo"<br>";
	echo $incremento++;echo"<br>";
	echo $incremento++;echo"<br><br>";
	echo "<p>Decremento</p>";
	$decremento=7;
	echo $decremento--;echo "<br>";
	echo $decremento--;echo"<br>";
	echo $decremento--;echo"<br>";
	echo $decremento--;echo"<br>";

	?>
	</fieldset>





	<br>
	<fieldset>
	<h3>Cadena</h3>
		<?php
		$var1="Hola ";
		$var2="Mi nombre es ";
		$var3="Marisol Daza Bautista";
		echo $var1.$var2.$var3;
		?>
	</fieldset>




	<br>
	<fieldset>
		<h3>Asignacion</h3>
		<?php
		$miVariable=7;
		echo "El numero es: ".$miVariable;
		echo "<br>";

		$miVariable+=5;
		echo "7 + 5 es: ".$miVariable;
		echo "<br>";

		$miVariable-=5;
		echo "12 - 5 es: ".$miVariable;
		echo "<br>";

		$miVariable*=5;
		echo "7 * 5 es: ".$miVariable;
		echo "<br>";

		$miVariable/=5;
		echo "35 / 5 es: ".$miVariable;
		echo "<br>";
		?>
	</fieldset>




	<br>
	<fieldset>
		<h3>Comparacion</h3>
		<form action="Capitulo2.php" method="POST">
		Ingrese Numero1:
		<input type="text" name="num1" required="required" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"><br><br>
		Ingrese Numero2:
		<input type="text" name="num2" required="required" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"><br><br>
		<input type="submit" value="Enviar">
		<br><br>
			
		</form>
		<?php
		if (isset($_POST['num1'])&&($_POST['num2'])){ 
		$nume1=$_POST['num1'];
		$nume2=$_POST['num2'];

		if($nume1>$nume2){
		echo $nume1." es mayor que ".$nume2;
		}else if($nume1==$nume2){
		echo $nume1." es igual a ".$nume2;
		}else{
		echo $nume1." es menor que ".$nume2;
		}
	}
		?>
	</fieldset>




	<br>
	<fieldset>
		<h3>Logicos</h3>
		<form action="Capitulo2.php" method="POST">
		Ingrese Numero1:
		<input type="text" name="numero1" maxlength="2" required="required" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"><br><br>
		Ingrese Numero2:
		<input type="text" name="numero2" maxlength="2" required="required" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"><br><br>
		<input type="submit" value="Enviar">
		<br><br>
		</form>
		<?php
		if (isset($_POST['numero1'])&&($_POST['numero2'])){ 
		$uno=$_POST['numero1'];
		$dos=$_POST['numero2'];
		if($uno==1 && $dos==2 ){
			echo "adivinaste los dos numeros ";
		}else if($uno==1 || $dos==1){
			echo "Adivinaste solo un numero";
		}else 
		echo "Los numeros son diferentes";
	}
		?>
	</fieldset>











</body>
</html>