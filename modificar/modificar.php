<?php
/*
session_start();

if(!$_SESSION){
	echo '<script languaje=javascript>
	alert("usuario no autentificado")
	self.location="../index.html"
	</script>';
}
 * 
 */
ini_set("display_errors",1);
date_default_timezone_set("America/Santiago");
//*******PAGINA DE PASO***********************//

$email=$_GET['email'];

require_once('../conexion/conexion.php');

?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="ejecutar_modificar.php">
<?php 

$consulta="SELECT * FROM usuarios WHERE email='$email'";
$resultado=mysqli_query($conex ,$consulta) or die (mysql_error());
$fila=mysqli_fetch_array($resultado);
//******************************************** 
		?>
		<table width="70%" border="1">
  <tr>
    <td>Nombre</td>
    <td><label for="txt_nombre"></label>
      <input type="text" name="txt_nombre" id="txt_nombre" value="<?php echo utf8_encode($fila['nombre']); ?>"/></td>
  </tr>
  <tr>
    <td>Apellido</td>
    <td><input type="text" name="txt_apellido" id="txt_apellido" value="<?php echo utf8_encode($fila['apellido']); ?>"/></td>
  </tr>
  <tr>
    <td>Perfil Usuario</td>
    <?php 
    if ($fila['perfil_usuario']=='user') {
    ?>
    <td><input type="radio" name="radio" id="rdn_user" value="user" checked="checked"/>
      <label for="rdn_user">Usuario</label> 
        <input type="radio" name="radio" id="rdn_administrador" value="admin" />
      <label for="rdn_administrador">Administrador</label></td>
    <?php
	    
    } else {
    ?>
  <td><input type="radio" name="radio" id="rdn_user" value="user" />
      <label for="rdn_user">Usuario</label> 
        <input type="radio" name="radio" id="rdn_administrador" value="admin" checked="checked"/>
      <label for="rdn_administrador">Administrador</label></td>
    <?php    
    }
    
    
     ?>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="btn_enviar" id="btn_enviar" value="Modificar" /></td>
  </tr>
</table>
<input type="hidden" value="<?php echo $email;  ?>" id="hd_mail" name="hd_mail"/>
</form>
</body>
</html>