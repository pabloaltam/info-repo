<?php

$conex = mysql_connect("http://mysql.nixiweb.com","u332152429_root","administrador")
 or die ("No se pudo realizar la conexion");
mysql_select_db("u332152429_info",$conex) 
or die ("ERROR en la base de datos");
$bd="u332152429_info";
//********************************************
if(!isset($_SESSION)){
	session_start();
}
$nom = $_POST['email'];
$pass= $_POST['password'];

$consulta="select *from users where email='".$nom."' and password='".$pass."'";
$resultado=mysql_query($consulta,$conex) or die (mysql_error());
$fila=mysql_fetch_array($resultado)
//********************************************

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title class="titulo"><?php echo "respuesta | respuesta"; ?></title>
		<link href="estilo/estilo.css" rel="stylesheet" />
	</head>
	<body>
		<?php 
    if(!$fila[0]){
        echo '<script languaje=javascript>
        alert("usuario o password erradas");
        self.location="index.php"</script>'; 
	}else{
 ?>
		<h2><?php
	$_SESSION['id_user']= $fila['id_user'];
	$_SESSION['email']=$fila['email'];
		header("Location: home.php");
	}
	  ?></h2>
	</body>
</html>

