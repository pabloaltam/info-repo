<?php
//Iniciar sesion
session_start();

//Validar si se esta ingresando con sesion correctamente
if(!$_SESSION){
	echo '<script languaje=javascript>
	alert("usuario no autentificado")
	self.location="index.html"
	</script>';
}else {
$id_user=$_SESSION["id_user"];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Home</title>
		<meta name="description" content="">
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
					<a href="/">Home</a>
				</p>
				<p>
					<a href="/contact">Contact</a>
				</p>
			</nav>

			<div>
			</div>

			<footer>
				<p>
					&copy; Copyright  by infored
					
				</p>
				<a href="desconectar.php">Cerrar sesion</a>
			</footer>
		</div>
	</body>
</html>
<?php
} 
 ?>
