<?php 

session_start();
$perfil_usuario=$_SESSION['perfil_usuario'];
if(!$_SESSION and $perfil_usuario!="admin"){
	echo '<script languaje=javascript>
	alert("usuario no autentificado")
	self.location="../index.html"
	</script>';
}elseif ($perfil_usuario!=="admin") {
	
	echo '<script languaje=javascript>
	alert("No tienes permisos para agregar usuarios...")
	self.location="../home.php"
	</script>';
		
	} else {
		
	
	
ini_set("display_errors",1); 
date_default_timezone_set("America/Santiago");
require_once('../operaciones/clase-operaciones.php'); 
$obj_usuario= new usuarios();

	$nombre 		= utf8_decode($_POST['txt_nombre']);
	$apellido		=	utf8_decode($_POST['txt_apellido']);
	$email			=	utf8_decode($_POST['hd_mail']);
	$perfilUsuario	= utf8_decode($_POST['radio']);

try{
	$obj_usuario->actualizarUsuario($email, $nombre, $apellido, $perfilUsuario);
	  if($obj_usuario=!0){
	  	echo "<script>alert('exito!!')</script>";
	  }else{
	  	echo "<script>alert('no se ah actualizado')</script>";
	  }
	}
catch(Exception $e){
	echo "Error : ".$e->getMessage();
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
	<header>
		<h1 id="">Modificardo exitosamente</h1>
	</header>
	
		<nav>
				<p>
					<a href="../home.php">Home</a>
				</p>
				<p>
					<a href="../contacto.html">Contact</a>
				</p>
			</nav>
<a href="filtrar.php">Continuar </a>
</body>
</html>
<?php }  ?>