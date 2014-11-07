<?php 
class usuarios{
	
	function agregarUsuarios($nombre,$apellido,$email,$contraseña,$perfilUsuario){
		/*Se crean las variables con los datos que vienen desde 
		  ejecutar-ingreso.php*/
		$nuevo_nombre = $nombre;
		$nuevo_apellido = $apellido;
		$nuevo_email	= $email;
		$nuevo_contraseña	= $contraseña;
		$nuevo_perfilUsuario	= $perfilUsuario; 
		
		include('../respuesta.php'); /*Aqui se debe incluir la conexion a la base de datos*/
		
		$agregar_usuario = "INSERT INTO `u332152429_info`.`usuarios` (`email`, `nombre`, `apellido`, `password`, `perfil_usuario`) VALUES ('$nuevo_email', '$nuevo_nombre', '$nuevo_apellido', '$nuevo_contraseña', '$nuevo_perfilUsuario');"; /*Cadena sql para ingresar usuario*/
		$resultado_agregar = $conex->query($agregar_usuario);
		$conex->close();
		}
	
	}

?>