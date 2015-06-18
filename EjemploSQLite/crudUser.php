<?php
	session_start();
	require_once("install.php");
	/* REQUEST = $_POST $_GET */
	if (!empty($_REQUEST['action'])){
		$accion = $_REQUEST['action'];
		if($accion == 'crear'){
			crearUsuario();
		}else if ($accion == 'ver'){
			verUsuarios();
		}else if ($accion == 'update'){
			updateUser();
		}else if ($accion == 'delete'){
			deleteUser();
		}

	}

	function crearUsuario(){
		/* Proteccion de Datos */
		$params = array(
			':nombres' => $_POST['Nombres'],
			':apellidos' => $_POST['Apellidos'],
			':titulo' => $_POST['Titulo'],
			':descripcion' => $_POST['Descripcion'],
			':foto' => $_POST['Foto'],
			':webpersonal' => $_POST['Webpersonal'],
			':email' => $_POST['Email'],
			':permisos' => $_POST['Permisos'],
		);

		/* Preparamos el query apartir del array $params*/
		$query = 'INSERT INTO Usuario
					(Nombres, Apellidos, Titulo, Descripcion, Foto,Webpersonal,Email,Permisos) 
				VALUES 
					(:nombres,:apellidos,:titulo,:descripcion,:foto,:webpersonal,:email,:permisos)';

		/* Ejecutamos el query con los parametros */
		$result = excuteQuery("Blog","", $query, $params);
		if ($result > 0){
			header('Location: viewUsers.php?result=true');
		}else{
			header('Location: addUser.php?result=false');
		}
	}

	function verUsuarios (){
		$query = "SELECT * FROM Usuario";
		$result = newQuery("Blog", "", $query);
		if ($result != false || $result > 0){
			foreach ($result as $value) {
				echo "<tr>";
				echo "    <td>".$value['idUsuario']."</td>";
				echo "    <td>".$value['Nombres']."</td>";
				echo "    <td>".$value['Apellidos']."</td>";
				echo "    <td>".$value['Titulo']."</td>";
				echo "    <td>".$value['Descripcion']."</td>";
				echo "    <td>".$value['Foto']."</td>";
				echo "    <td>".$value['Webpersonal']."</td>";
				echo "    <td>".$value['Email']."</td>";
				echo "    <td>".$value['Permisos']."</td>";
				echo "</tr>";
			}
		}else{
			echo "No se encontraron resultados";
		}
	}

	function getUser($id){
		$query = "SELECT * FROM Usuario WHERE idUsuario = '".$id."'";
		$result = newQuery("Blog", "", $query);
		if ($result != false || $result > 0){
			foreach ($result as $value) {
				return $value;
			}
		}else{
			return false;
		}
	}

	function updateUser (){

		/* Proteccion de Datos */
		$params = array(
			
			':nombres' => $_POST['Nombres'],
			':apellidos' => $_POST['Apellidos'],
			':titulo' => $_POST['Titulo'],
			':descripcion' => $_POST['Descripcion'],
			':foto' => $_POST['Foto'],
			':webpersonal' => $_POST['Webpersonal'],
			':email' => $_POST['Email'],
			':permisos' => $_POST['Permisos'],
		);

		/* Preparamos el query apartir del array $params*/
		$query ='UPDATE Usuario SET
					Nombres = :nombres,
					Apellidos = :apellidos,
					Titulo = :titulo,
					Descripcion = :descripcion,
					Foto = :foto , 
					Webpersonal = :webpersonal,
					Email= :email,
					Permisos = :permisos

				 WHERE idUsuario = :idUser;
				';

		$result = excuteQuery("Blog", "", $query, $params);
		if ($result > 0){
			unset($_SESSION['idUser']);
			$_SESSION['idUser'] = NULL;
			header('Location: viewUsers.php?result=true');
		}else{
			header('Location: editUser.php?result=false');
		}
	}

	function deleteUser (){

		$idUser = $_GET['id'];

		/* Proteccion de Datos */
		$params = array(
			':id' => $_GET['id'],
		);

		/* Preparamos el query apartir del array $params*/
		$query ='DELETE FROM Usuario
				 WHERE idUsuario = :id;';

		$result = excuteQuery("Blog", "", $query, $params);
		if ($result > 0){
			header('Location: viewUsers.php?result=true');
		}else{
			header('Location: viewUser.php?result=false');
		}
	}

?>