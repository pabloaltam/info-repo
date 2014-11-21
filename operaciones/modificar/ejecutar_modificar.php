<?php 

session_start();
$perfil_usuario=$_SESSION['perfil_usuario'];
if(!$_SESSION and $perfil_usuario!="admin"){
	echo '<script languaje=javascript>
	alert("usuario no autentificado")
	self.location="/index.php"
	</script>';
}elseif ($perfil_usuario!=="admin") {
	
	echo '<script languaje=javascript>
	alert("No tienes permisos para agregar usuarios...")
	self.location="/home.php"
	</script>';
		
	} else {
			
ini_set("display_errors",1); 
date_default_timezone_set("America/Santiago");
require_once('../clase-operaciones.php'); 
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

		<h1 id="">Modificado exitosamente</h1>
	
<?php }  ?>