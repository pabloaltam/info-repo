<?php 
class usuarios{
		
	function agregarUsuarios($nombre,$apellido,$email,$contraseña,$perfilUsuario){
		/*Se crean las variables con los datos que vienen desde 
		  ejecutar-ingreso.php*/
		$nuevo_nombre 			= $nombre;
		$nuevo_apellido 		= $apellido;
		$nuevo_email			= $email;
		$nuevo_contraseña		= $contraseña;
		$nuevo_perfilUsuario	= $perfilUsuario; 
		
		/*Aqui se debe incluir la conexion a la base de datos*/
		require_once('../conexion/conexion.php');
		
		$agregar_usuario = "INSERT INTO `u332152429_info`.`usuarios`
			 (`email`, `nombre`, `apellido`,`fecha_creacion`, `password`, `perfil_usuario`) 
		VALUES 
			('$email', '$nombre', '$apellido',NOW(), '$contraseña', '$perfilUsuario');"; 
			 
			 //*Cadena sql para ingresar usuario*/
		$resultado_agregar = $conex->query($agregar_usuario);
		}
	function actualizarUsuario($email,$nombre,$apellido,$perfilUsuario)
	{
		$sqlActualizar="UPDATE `usuarios` SET `nombre` = '$nombre', `apellido` = '$apellido', `perfil_usuario` = '$perfilUsuario' WHERE `email` = '$email';";
		date_default_timezone_set("America/Santiago");
		require_once ('../conexion/conexion.php');
		
		$resultado_actualizar = $conex -> query($sqlActualizar);
	}
	
	}

?>