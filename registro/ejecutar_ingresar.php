<?php 
ini_set("display_errors",1); /*Para que no muestre errores en el navegador*/
require_once('../conexion/conexion.php');

$conMaestra = $_POST['txt_contraseñaMaestra'];

/*Consultar contraseña maestra*/
$query = "SELECT clave_admin FROM pass_admin WHERE clave_admin='".$conMaestra."'";
$resulta=mysqli_query($conex ,$query) or die('No se pudo consultar:' . mysql_error());
$fila=mysqli_fetch_array($resulta);

if(!$fila[0]){
	echo '<script language = javascript>
	alert("No sea estúpido admin, por favor verifique la contraseña maestra.")
	self.location = "registro.php"
	</script>';
}else{
	/*Se llama a clase-operaciones.php*/
	require_once('../operaciones/clase-operaciones.php'); 
	$obj_usuario= new usuarios();

	$nombre = $_POST['txt_nombre'];
	$apellido	= $_POST['txt_apellido'];
	$email		=	$_POST['txt_email'];
	$contraseña = $_POST['txt_contraseña'];
	$perfilUsuario	= $_POST['radio'];

	try{
		$obj_usuario->agregarUsuarios($nombre,$apellido,$email,$contraseña,$perfilUsuario);
	  	if($obj_usuario=!0){
	  		echo "<script>alert('exito!!')</script>";
	  	}else{
	  		echo "<script>alert('no se ah ingresado')</script>";
	  	}
	}
	catch(Exception $e){
		echo "Error : ".$e->getMessage();
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="shortcut icon" href="../img/favicon.ico">
</head>
<a href="../home.php">Continuar </a>
<body>
	<h1>Hola :D</h1>
</body>
</html>
