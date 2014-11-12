<?php
ini_set("display_errors",1);
date_default_timezone_set("America/Santiago");
//*******PAGINA DE PASO***********************//

require_once('/conexion/conexion.php');

//*******************************************//
if(!isset($_SESSION)){
	session_start();
}

	$nom = $_POST['email'];
	$pass= $_POST['password'];

$consulta="SELECT * FROM usuarios WHERE email='".$nom."' and password='".$pass."'";
$resultado=mysqli_query($conex ,$consulta) or die (mysql_error());
$fila=mysqli_fetch_array($resultado);
//******************************************** 
    
    if(!$fila[0]){
        echo '<script language = javascript>
	alert("Usuario o Password errados, por favor verifique.")
	self.location = "index.html"
	</script>'; 
	}else{
	$_SESSION['email']=$fila['email'];
	$_SESSION['nombre']=$fila['nombre'];
	$_SESSION['apellidos']=utf8_encode($fila['apellido']);
	$_SESSION['fecha_creacion']=$fila['fecha_creacion'];
	$_SESSION['perfil_usuario']=$fila['perfil_usuario'];

		header("Location: home.php");
	}
	  ?>
