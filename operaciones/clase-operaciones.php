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
		
		include(""); /*Aqui se debe incluir la conexion a la base de datos*/
		
		$agregar_usuario = ""; /*Cadena sql para ingresar usuario*/
		}
	
	}

?>