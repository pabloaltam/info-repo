<?php
//Iniciar sesion
session_start();
//Validar si se esta ingresando con sesion correctamente
if(!$_SESSION){
	echo '<script languaje=javascript>
	alert("usuario no autentificado")
	self.location="index.html"
	</script>';
}else{

	//VARIABLES DE SESION
	$mail				=	$_SESSION['email'];
	$nombre				=	$_SESSION['nombre'];
	$apellidos			=	$_SESSION['apellidos'];
	$fecha_creacion		=	$_SESSION['fecha_creacion'];
	$perfil_usuario		=	$_SESSION['perfil_usuario'];
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>INFORED Website</title>

  </head>

  <body>
<div class="container">
    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Infored Website</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/index.html">Inicio</a></li>
            <li><a href="#">Nosotros</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="http://infored.misotec.com/foro" target="_blank">Foro</a></li>
            <li><a href="#">Comunicados</a></li>
          </ul>
          
        </div><!--/.nav-collapse -->
    </nav>


        
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
            <div class="bs-example">
    <div class="panel panel-default">
      <!-- Default panel contents -->
        <div class="panel-heading"><h3>Bienvenido, <?php echo "$nombre"." $apellidos";?>. </h3>
<a class="btn btn-xs btn-primary" href="../index.html">
          <i class="fa fa-home fa-lg"></i> Inicio</a>
            
            
            <?php 
				
				if ($perfil_usuario=="admin") {
					?>

							<a class="btn btn-xs btn-primary" href="registro/registro.php"><i class="fa fa-plus-square fa-lg"></i> Agregar usuario</a>
							<a class="btn btn-xs btn-primary" href="modificar/modificar.php"><i class="fa fa-refresh fa-lg"></i> Modificar usuario</a>
					<?php 
				} else {
					
				}
				
				 ?>
            
            <a class="btn btn-xs btn-primary" href="../desconectar.php">
          <i class="fa fa-sign-out fa-lg"></i> Cerrar sesión</a>
        
        </div>
                
    </div>
  </div>
            <div class="well bs-component">
              <form class="form-horizontal" id="form1" name="form1" method="post" action="ejecutar_ingresar.php">
                <fieldset>
                  <legend>Registro de nuevo usuario</legend>
                  <div class="form-group">
                    <label for="txt_nombre" class="col-lg-4 control-label">Nombre</label>
                    <div class="col-lg-8">
                      <input type="text" class="form-control" name="txt_nombre" id="txt_nombre" placeholder="Ingrese el nombre">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="txt_apellido" class="col-lg-4 control-label">Apellido</label>
                    <div class="col-lg-8">
                      <input type="text" class="form-control" name="txt_apellido" id="txt_apellido" placeholder="Ingrese apellidos">
                      </div>
                    </div>
                    <div class="form-group">
                    <label for="txt_email" class="col-lg-4 control-label">Correo Electrónico</label>
                    <div class="col-lg-8">
                      <input type="text" class="form-control" name="txt_email" id="txt_email" placeholder="el@correo.com">
                    </div>
                  </div>
                     <div class="form-group">
                    <label for="txt_contraseña" class="col-lg-4 control-label">Contraseña</label>
                    <div class="col-lg-8">
                      <input type="password" class="form-control"  name="txt_contraseña" id="txt_contraseña" placeholder="Ingrese contraseña">
                      </div>
                    </div>
                  <div class="form-group">
                    <label class="col-lg-4 control-label">Perfil de usuario</label>
                    <div class="col-lg-8">
                      <div class="radio">
                        <label>
                          <input type="radio" name="radio" id="rdm_user" value="user">
                          Usuario
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="radio" id="rdn_administrador" value="admin">
                          Administrador
                        </label>
                      </div>
                    </div>
                  </div>
                     <div class="form-group has-warning">
                  <label class="col-lg-4 control-label" for="txt_contraseñaMaestra">Contraseña Maestra</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" name="txt_contraseñaMaestra" id="txt_contraseñaMaestra">
                </div>
                    </div>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button class="btn btn-default">Cancelar</button>
                      <button type="submit" class="btn btn-success">Registrar</button>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
</form>
        </div>
      </div> 
              
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../cssi/estilo.css">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  </body>
</html>
    <?php }  ?>