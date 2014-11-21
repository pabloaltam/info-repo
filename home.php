<?php require 'include/session.php'; ?>
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

		<!-- Replace apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body>
		<div>
    <?php require 'include/menu.php'; ?>

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
					<fieldset id="" class="">
					  <legend>Opciones para los administradores</legend>
											 
					
					<div>
						
						<ul>
							<li><a href="operaciones/modificar/filtrar.php">Actualizar usuario</a></li>
							<li><a href="operaciones/registro/registro.php">Crear un nuevo usuario</a></li>
						</ul>
						
						</div>
						</fieldset>
						<hr/>
					<?php 
				} else {
					
				}
				
				 ?>
				
			</div>

			<footer>
				<p>
					&copy; Copyright  by infored
					
				</p>
				<a href="operaciones/desconectar.php">Cerrar sesi&oacute;n</a>
			</footer>
		</div>
    <?php require 'include/pie.php'; ?>