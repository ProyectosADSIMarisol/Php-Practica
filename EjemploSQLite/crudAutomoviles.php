<?php
	session_start();
	require_once("install.php");
	/* REQUEST = $_POST $_GET */
	if (!empty($_REQUEST['action'])){
		$accion = $_REQUEST['action'];
		if($accion == 'crear'){
			crearAutomovil();
		}else if ($accion == 'ver'){
			verAutomovil();
		}else if ($accion == 'update'){
			updateAutomovil();
		}else if ($accion == 'delete'){
			deleteAutomovil();
		}

	}

	function crearAutomovil(){
		/* Proteccion de Datos */
		$params = array(
			':usuario' => $_POST['Usuario'],
			':piel' => $_POST['Piel'],
			':respuestas' => $_POST['Respuestas'],
		
		);

		/* Preparamos el query apartir del array $params*/
		$query = 'INSERT INTO 
					 ConfigUsuario(Usuario,Piel,Respuestas)
				VALUES
					(:usuario,:piel,:respuestas)';

		/* Ejecutamos el query con los parametros */
		$result = excuteQuery("Blog","", $query, $params);
		if ($result > 0){
			header('Location: viewAutomoviles.php?result=true');
		}else{
			header('Location: addAutomovil.php?result=false');
		}
	}

	function verAutomovil (){
		$query = "SELECT * FROM ConfigUsuario";
		$result = newQuery("Blog", "", $query);
		if ($result != false || $result > 0){
			foreach ($result as $value) {
				echo "<tr>";
				echo "    <td>".$value['idConfigUsuario']."</td>";
				echo "    <td>".$value['Usuario']."</td>";
				echo "    <td>".$value['Piel']."</td>";
				echo "    <td>".$value['Respuestas']."</td>";
				echo "</tr>";
			}
		}else{
			echo "No se encontraron resultados";
		}
	}

	function getAutomovil($id){
		$query = "SELECT * FROM ConfigUsuario WHERE idConfigUsuario = '".$id."'";
		$result = newQuery("Blog", "", $query);
		if ($result != false || $result > 0){
			foreach ($result as $value) {
				return $value;
			}
		}else{
			return false;
		}
	}

	function updateAutomovil (){

		/* Proteccion de Datos */
		$params = array(
			':idConfigUsuario' => $_SESSION['idConfigUsuario'],
			':usuario' => $_POST['usuario'],
			':piel' => $_POST['piel'],
			':respuestas' => $_POST['respuestas'],
			
		);

		/* Preparamos el query apartir del array $params*/
		$query ='UPDATE ConfigUsuario SET
					Usuario = :usuario,
					Piel = :piel,
					Respuestas = :respuestas
					
				 WHERE idConfigUsuario= :idConfigUsuario;
				';

		$result = excuteQuery("Blog", "", $query, $params);
		if ($result > 0){
			unset($_SESSION['idAutomovil']);
			$_SESSION['idAutomovil'] = NULL;
			header('Location: viewConfigUsuario.php?result=true');
		}else{
			header('Location: editAutomovil.php?result=false');
		}
	}

	function deleteAutomovil (){

		$idConfigUsuario = $_GET['id'];

		/* Proteccion de Datos */
		$params = array(
			':id' => $_GET['id'],
		);

		/* Preparamos el query apartir del array $params*/
		$query ='DELETE FROM ConfigUsuario
				 WHERE idConfigUsuario = :id;';

		$result = excuteQuery("Blog", "", $query, $params);
		if ($result > 0){
			header('Location: viewConfigUsuario.php?result=true');
		}else{
			header('Location: viewConfigUsuario.php?result=false');
		}
	}

?>