<?php
ini_set("display_errors", 0);
date_default_timezone_set("America/Santiago");
//*******PAGINA DE PASO***********************//
require_once('../include/conexion.php');
//*******************************************//
if (!isset($_SESSION)) {
    session_start();
}
$nom = $_POST['email'];
$pass = $_POST['password'];
$obj_conectar = new Conectar();
$consulta = "SELECT * FROM usuarios WHERE email='" . $nom . "' and password='" . $pass . "'";
$resultado = mysqli_query($obj_conectar->conectar(), $consulta) or die(mysql_error());
$fila = mysqli_fetch_array($resultado);
//******************************************** 

if (!$fila[0]) {
    echo '<script language = javascript>
	alert("Usuario o Password errados, por favor verifique.")
	self.location = "/index.php"
	</script>';
} else {
    $_SESSION['email'] = utf8_encode($fila['email']);
    $_SESSION['nombre'] = utf8_encode($fila['nombre']);
    $_SESSION['apellidos'] = utf8_encode($fila['apellido']);
    $_SESSION['fecha_creacion'] = utf8_encode($fila['fecha_creacion']);
    $_SESSION['perfil_usuario'] = utf8_encode($fila['perfil_usuario']);

    header("Location: /operaciones/usuario.php");
}
?>
