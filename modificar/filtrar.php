<?php 

	session_start();
$perfil_usuario=$_SESSION['perfil_usuario'];
if(!$_SESSION and $perfil_usuario!="admin"){
	echo '<script languaje=javascript>
	alert("usuario no autentificado")
	self.location="../index.html"
	</script>';
}elseif ($perfil_usuario!=="admin") {
	
	echo '<script languaje=javascript>
	alert("No tienes permisos para agregar usuarios...")
	self.location="../home.php"
	</script>';
		
	} else {
		
	
	date_default_timezone_set("America/Santiago");

	ini_set("display_errors",1);
	include_once ('../operaciones/buscar_usuario.php');
	
	$obj_Usuario= new Usuario();
	

 ?>
 

 
<!DOCTYPE HTML>
<html lang="es">
	
	<head>
		<meta charset="UTF-8"  />
		<title> Filtro </title>
		<link rel="shortcut icon" href="../img/favicon.ico">
		<meta name="description" content="Esta es una pagina para filtrar los usuarios a modificar" />
	</head>
	<body>
		<header>
			<h1 id="">Filtro de usuarios</h1>
		</header>
		
		<nav>
				<p>
					<a href="../home.php">Home</a>
				</p>
				<p>
					<a href="../contacto.html">Contact</a>
				</p>
			</nav>
		<form action="filtrar.php" method="post" target="_self">
			<label for="txt_busqueda">Filtrar :</label>
			<input type="search" name="txt_busqueda"  id="txt_busqueda" />
			<input type="submit" name="btn_enviar" value="Buscar" id="btn_enviar"/>
		</form>	
		<hr />
		<?php 
		
		if(isset($_POST['txt_busqueda']))
		{
			$email = $_POST['txt_busqueda'];
			$resultado= $obj_Usuario->buscarUsuario($email);
			$cantidad= count($resultado);
			
			?>
<p>Total resultados : <strong><?php echo $cantidad;?></strong></p>
	 		<?php
	 	

		 	if($cantidad > 0){ ?>
				
				<table border="4" cellpadding="5px" cellspacing="5px" >
				<tr align="left">
					<th >Nombre</th><th>Email</th><th>Fecha de creación</th>
				</tr>
				<?php
				$num=0;
				foreach($resultado as $a){ ?>
				<tr cellpadding="5px" cellspacing="5px" align="left">
					<td><?php echo utf8_encode($a[1])." ".utf8_encode($a[2])?></td>
					<td >
						<form id="nro_<?php echo $num; ?>" name="nro_<?php echo $num; ?>" action="modificar.php" method="post" accept-charset="utf-8">
						  <input type="hidden" name="email" value="<?php echo $a[0]; ?>" id="email"/>
												   <p><input type="submit" value="<?php echo $a[0]; ?>"/></p>
						</form>
						
						<!--<a href="modificar.php?email=<?php echo $a[0]; ?>"><?php echo $a[0]?>-->
							
							
						</a></td>
					<td><?php echo $a[3];  ?></td>
				</tr>
				<?php
				$num++;
				}

			}
		}
		 ?>
		
	</body>
	
</html>
<?php }  ?>