<?php
//*******PAGINA DE PASO***********************//
$conex = mysql_connect("localhost","root","root")
 or die ("No se pudo realizar la conexion");
mysql_select_db("u332152429_info",$conex) 
or die ("ERROR en la base de datos");

//*******************************************//
if(!isset($_SESSION)){
	session_start();
}

	$nom = $_POST['email'];
	$pass= $_POST['password'];

$consulta="SELECT * FROM usuarios WHERE email='".$nom."' and password='".$pass."'";
$resultado=mysql_query($consulta,$conex) or die (mysql_error());
$fila=mysql_fetch_array($resultado);
//******************************************** 
    
    if(!$fila[0]){
        echo '<script language = javascript>
	alert("Usuario o Password errados, por favor verifique.")
	self.location = "index.html"
	</script>'; 
	}else{
	$_SESSION['id_user']= $fila['id_user'];
	$_SESSION['email']=$fila['email'];
	$_SESSION['nombre']=$fila['nombre'];
	$_SESSION['apellidos']=$fila['apellidos'];
	$_SESSION['fecha_creacion']=$fila['fecha_creacion'];
	$_SESSION['perfil_usuario']=$fila['perfil_usuario'];

		header("Location: home.php");
	}
	  ?>
