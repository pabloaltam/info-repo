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
          <a class="navbar-brand" href="index.html">Infored Website</a>
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
        <div class="panel-heading"><h3>Bienvenido, <?php echo "$nombre"." $apellidos";?>. </h3></div>

      <!-- Table -->
      <table class="table">
        <thead>
        </thead>
        <tbody>
          <tr>
            <td><h5>Correo electrónico</h5></td>
            <td><?php echo "$mail";?></td>
          </tr>
            <tr>
            <td><h5>Perfil de usuario</h5></td>
            <td><?php echo "$perfil_usuario";?></td>
          </tr>
            <tr>
            <td><h5>Fecha de registro</h5></td>
            <td><?php echo "$fecha_creacion";?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>    
                        <ul>
							<li><a href="index.html">Volver a inicio</a></li>
						</ul>
				<hr/>
				<?php 
				
				if ($perfil_usuario=="admin") {
					?>
					<fieldset id="" class="">
					  <legend>Panel de administrador</legend>
											 
					
					<div>
						
						<ul>
							<li><a href="modificar/filtrar.php">Actualizar usuario</a></li>
							<li><a href="registro/registro.php">Crear un nuevo usuario</a></li>
						</ul>
						
						</div>
						</fieldset>
						<hr/>
					<?php 
				} else {
					
				}
				
				 ?>
                        <a href="desconectar.php">Cerrar sesi&oacute;n</a>
            
        </div>
                
            </div>
            
        </div>
    </div>
      </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="cssi/estilo.css">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  </body>
</html>
    <?php }  ?>