<?php

//GUARDA EL NOMBRE DEL ARCHIVO ACTUAL
$estaPagina = \basename($_SERVER["SCRIPT_FILENAME"], '.php');
//MUESTRA ADVERTENCIA SI SE ACCEDE A ESTE ARCHIVO (session.php)
if ($estaPagina == 'session') {
    echo '<script>alert("Que intentas hacer?");self.location="/index.php"</script>';
    die();
}
session_start();
//Validar si se esta ingresando con sesion correctamente
if (!$_SESSION) {
    //NO HAY SESION Y LA PAGINA QUE SE MUESTRA NO ES INDEX, ACERCA o CONTACTO
    if (!($estaPagina == 'index' || $estaPagina == 'acerca' || $estaPagina == 'contacto' || $estaPagina == 'session')) {
        //MUESTRA MENSAJE PARA INICIAR SESION
        echo '<script>alert("Debes Iniciar Sesion");self.location="/index.php"</script>';
        //DETIENE LA EJECUCION DEL CODIGO
        die();
    }
} else {
    $mail = $_SESSION['email'];
    $nombre = $_SESSION['nombre'];
    $apellidos = $_SESSION['apellidos'];
    $fecha_creacion = $_SESSION['fecha_creacion'];
    $perfil_usuario = $_SESSION['perfil_usuario'];
    //Control de Permisos en las Paginas de Administracion
    if (($estaPagina == 'ejecutar_ingresar' || $estaPagina == 'registro' || $estaPagina == 'ejecutar_modificar' || $estaPagina == 'filtrar' || $estaPagina == 'modifica_iframe' || $estaPagina == 'modificar') && $perfil_usuario != "admin") { 
        echo '<script languaje=javascript>
	alert("No tienes permisos para agregar usuarios...")
	self.location="/index.php"
	</script>';
        die();
    }
}
?>