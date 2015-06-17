<?php



	function createDB ($nameDB = "Blog", $pathDB = ""){
		try {
			/* Creacion de la Base de Datos o Seleccion de la misma*/
		    $db = new PDO("sqlite:".$pathDB.$nameDB.".sqlite"); //Creamos una conexion
		    echo "<i class='fa fa-check-square-o'></i> Se ha creado/seleccionado la base de datos correctamente."."<br/>";

		    /* Creacion de la tabla Usuarios */
		    $query = "CREATE TABLE 'Usuario' (
						'idUsuario'	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
						'Nombres'	TEXT NOT NULL,
						'Apellidos'	TEXT NOT NULL,
						'Titulo'	TEXT NOT NULL,
						'Descripcion'	TEXT NOT NULL,
						'Foto'	TEXT NOT NULL,
						'Webpersonal'	TEXT NOT NULL,
						'Email'	TEXT NOT NULL,
						'Permisos'	TEXT NOT NULL
					);"; //Creacion del query para crear la tabla.
		    $result = $db->exec($query); //Ejecutamos el query. Se usa exec para todos los casos excepto para los select.
		    echo ($result === false) ? "<i class='fa fa-times-circle'></i> No se pudo crear la Tabla Usuarios."."<br/>" : "<i class='fa fa-check-square-o'></i> Se creo correctamente la Tabla Usuarios."."<br/>";

		    /* Creacion de la tabla ConfiUsuarios */
		    $query = "CREATE TABLE `ConfigUsuario` (
						`idConfigUsuario`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
						`Usuario`	TEXT NOT NULL,
						`Piel`	TEXT NOT NULL,
						`Respuestas`	TEXT NOT NULL
						
					);";
			$result = $db->exec($query); //Ejecutamos el query. Se usa exec para todos los casos excepto para los select.
			echo ($result === false) ? "<i class='fa fa-times-circle'></i> No se pudo crear la Tabla Configuracion Usuarios."."<br/>" : "<i class='fa fa-check-square-o'></i> Se creo correctamente la Tabla Automovil."."<br/>";

/* Creacion de la tabla Posts */
		    $query = "CREATE TABLE 'Post' (
						'idPost'	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
						'Utc'	INT NOT NULL,
						'Anio'	INT NOT NULL,
						'Mes'INT NOT NULL,
						'Dia'	INT NOT NULL,
						'Hora'	TEXT NOT NULL,
						'Segundo'	INT NOT NULL,
						'Titulo'	TEXT NOT NULL,
							'SubTitulo'	TEXT NOT NULL,
								'Icono'	TEXT NOT NULL,
									'Texto'	TEXT NOT NULL,
										'Imagen'	TEXT NOT NULL,
											'Video'	TEXT NOT NULL,
												'Sonido'	TEXT NOT NULL
						
					);"; //Creacion del query para crear la tabla.
		    $result = $db->exec($query); //Ejecutamos el query. Se usa exec para todos los casos excepto para los select.
		    echo ($result === false) ? "<i class='fa fa-times-circle'></i> No se pudo crear la Tabla Posts"."<br/>" : "<i class='fa fa-check-square-o'></i> Se creo correctamente la Tabla Usuarios."."<br/>";



/* Creacion de la tabla Posts */
		    $query = "CREATE TABLE 'Logs' (
						'idLogs'	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
						'Utc'	INT NOT NULL,
						'Anio'	INT NOT NULL,
						'Mes'INT NOT NULL,
						'Dia'	INT NOT NULL,
						'Hora'	TEXT NOT NULL,
						'Segundo'	INT NOT NULL,
						'Ip'	TEXT NOT NULL,
							'Navegador'	TEXT NOT NULL,
								'Usuario'	TEXT NOT NULL,
									'Operador'	TEXT NOT NULL
										
						
					);"; //Creacion del query para crear la tabla.
		    $result = $db->exec($query); //Ejecutamos el query. Se usa exec para todos los casos excepto para los select.
		    echo ($result === false) ? "<i class='fa fa-times-circle'></i> No se pudo crear la Tabla Logs"."<br/>" : "<i class='fa fa-check-square-o'></i> Se creo correctamente la Tabla Usuarios."."<br/>";









		    $db = NULL; //Cerramos la conexion a la Base de datos.
		}catch(PDOException $e){
		    echo $e->getMessage();
		}
	}

	/* Funcion para ejecutar querys de tipo Insert, Update, Deleted */
	function excuteQuery ($nameDB = "Blog", $pathDB = "", $query, $params=NULL){
		try {
			/* Creacion de la Base de Datos o Seleccion de la misma*/
		    $db = new PDO("sqlite:".$pathDB.$nameDB.".sqlite"); //Creamos una conexion
		    if ($params === NULL){
				/* Intentamos Ejecutar el Query */
		    	$result = $db->exec($query);
		    }else{
		    	/* Intentamos Ejecutar el Query */
		    	$cmd = $db->prepare($query);
		    	var_dump($query);
		    	$result = $cmd->execute($params);
		    }

		    $db = NULL; //Cerramos la conexion a la Base de datos.
		    return ($result);
		}catch(PDOException $e){
		    echo $e->getMessage();
		}
	}

	/* Funcion para ejecutar querys de tipo Selects */
	function newQuery ($nameDB = "Blog", $pathDB = "", $query){
		try {
			/* Creacion de la Base de Datos o Seleccion de la misma*/
		    $db = new PDO("sqlite:".$pathDB.$nameDB.".sqlite"); //Creamos una conexion
		    
		    /* Intentamos Ejecutar el Query */
		    $result = $db->query($query);

		    $db = NULL; //Cerramos la conexion a la Base de datos.
		    return ($result);
		}catch(PDOException $e){
		    echo $e->getMessage();
		}
	}

?>