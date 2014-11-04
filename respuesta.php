<?php
//*******PAGINA DE PASO***********************//
$conex = mysql_connect("localhost","root","root")
 or die ("No se pudo realizar la conexion");
mysql_select_db("u332152429_info",$conex) 
or die ("ERROR en la base de datos");
$bd="u332152429_info";
//*******************************************//
if(!isset($_SESSION)){
	session_start();
}
$nom = $_POST['email'];
$pass= $_POST['password'];

$consulta="select *from users where email='".$nom."' and password='".$pass."'";
$resultado=mysql_query($consulta,$conex) or die (mysql_error());
$fila=mysql_fetch_array($resultado);
//******************************************** 
    if(!$fila[0]){
        echo '<script languaje=javascript>
        alert("usuario o password erradas");
        self.location="index.php"</script>'; 
	}else{
	$_SESSION['id_user']= $fila['id_user'];
	$_SESSION['email']=$fila['email'];
		header("Location: home.php");
	}
	  ?>
