<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="UTF-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="ejecutar_ingresar.php">

<table width="70%" border="1">
  <tr>
    <td>Nombre</td>
    <td><label for="txt_nombre"></label>
      <input type="text" name="txt_nombre" id="txt_nombre" /></td>
  </tr>
  <tr>
    <td>Apellido</td>
    <td><input type="text" name="txt_apellido" id="txt_apellido" /></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="txt_email" id="txt_email" /></td>
  </tr>
  <tr>
    <td>Contraseña</td>
    <td><label for="txt_contraseña"></label>
      <input type="password" name="txt_contraseña" id="txt_contraseña" /></td>
  </tr>
  <tr>
    <td>Perfil Usuario</td>
    <td><input type="radio" name="radio" id="rdn_user" value="user" />
      <label for="rdn_user">Usuario 
        <input type="radio" name="radio" id="rdn_administrador" value="admin" />
      Administrador</label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="btn_enviar" id="btn_enviar" value="Enviar" /></td>
  </tr>
</table>

</form>
</body>
</html>