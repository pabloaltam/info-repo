<?php
session_start();
$perfil_usuario=$_SESSION['perfil_usuario'];
if(!$_SESSION and $perfil_usuario!="admin"){
	echo '<script languaje=javascript>
	alert("usuario no autentificado")
	self.location="/index.php"
	</script>';
} elseif ($perfil_usuario!=="admin") {
	echo '<script languaje=javascript>
	alert("No tienes permisos para agregar usuarios...")
	self.location="/home.php"
	</script>';
		
	} else {
?>
<?php require '../../include/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>INFORED Website</title>

  </head>

  <body>
<div class="container">
<?php require '../../include/menu.php'; ?>   
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
            <div class="bs-example">
<!-- MENU OPERACIONES -->
<?php require '../../include/menu_operaciones.php'; ?>   
<!-- MENU OPERACIONES -->
  </div>
            <div class="well bs-component">
<iframe src="/operaciones/modificar/filtrar.php" width="500" height="500" frameBorder="0" scrolling="no"></iframe > 
            </div>
          </div>
</form>
        </div>
      </div> 
<?php require '../../include/pie.php'; ?>
<?php }  ?>