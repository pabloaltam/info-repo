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
<html lang="es">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Home</title>
		<meta name="description" content="Pagina de perfil de los usuarios de infored.">
		<meta name="author" content="Victor">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body>
		<div>
			<header>
				<h1>Home</h1>
			</header>
			<nav>
				<p>
					<a href="home.php">Home</a>
				</p>
				<p>
					<a href="contacto.html">Contact</a>
				</p>
			</nav>

			<div>
				<table border="1" cellspacing="5" cellpadding="5">
					<tr><th>Variable</th><th>Contenido</th></tr>
					<tr><th>nombre</th><td><?php echo "$nombre";?></td></tr>
					<tr><th>apellidos</th><td><?php echo "$apellidos";?></td></tr>
					<tr><th>email</th><td><?php echo "$mail";?></td></tr>
					<tr><th>perfil_usuario</th><td><?php echo "$perfil_usuario";?></td></tr>
					<tr><th>fecha_creacion</th><td><?php echo "$fecha_creacion";?></td></tr>
				</table>
				<hr/>
				<?php 
				
				if ($perfil_usuario=="admin") {
					?>
					<div>Opciones para los administradores
						
						<ul>
							<li><a href="modificar/filtrar.php">Actualizar usuario</a></li>
							<li><a href="registro/registro.php">Crear un nuevo usuario</a></li>
						</ul>
						
						</div><hr/>
					<?php 
				} else {
					
				}
				
				 ?>
				
			</div>

			<footer>
				<p>
					&copy; Copyright  by infored
					
				</p>
				<a href="desconectar.php">Cerrar sesi&oacute;n</a>
			</footer>
		</div>
	</body>
</html>
<?php }  ?>