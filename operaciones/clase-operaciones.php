<?php
if (\basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'clase-operaciones') { echo '<script>alert("Que intentas hacer?");self.location="/index.php"</script>';die();}
require '../../include/conexion.php';
class usuarios {

    function agregarUsuarios($nombre, $apellido, $email, $contraseña, $perfilUsuario) {
        /* Se crean las variables con los datos que vienen desde ejecutar-ingreso.php */
        $nuevo_nombre = $nombre;
        $nuevo_apellido = $apellido;
        $nuevo_email = $email;
        $nuevo_contraseña = $contraseña;
        $nuevo_perfilUsuario = $perfilUsuario;

        /* Aqui se debe incluir la conexion a la base de datos */
        $obj_conectar = new Conectar();
        $agregar_usuario = "INSERT INTO `usuarios`
			 (`email`, `nombre`, `apellido`,`fecha_creacion`, `password`, `perfil_usuario`) 
		VALUES 
			('$email', '$nombre', '$apellido',NOW(), '$contraseña', '$perfilUsuario');";

        //*Cadena sql para ingresar usuario*/
        $resultado_agregar = $obj_conectar->conectar()->query($agregar_usuario);
    }

    function actualizarUsuario($email, $nombre, $apellido, $perfilUsuario) {
        $sqlActualizar = "UPDATE `usuarios` SET `nombre` = '$nombre', `apellido` = '$apellido', `perfil_usuario` = '$perfilUsuario' WHERE `email` = '$email';";
        date_default_timezone_set("America/Santiago");
        $obj_conectar = new Conectar();
        $resultado_actualizar = $obj_conectar->conectar()->query($sqlActualizar);
    }

}

?>