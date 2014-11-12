<?php 

	ini_set("display_errors",1);
	include_once ('../operaciones/buscar_usuario.php');
	session_start();
	
	$obj_Usuario= new Usuario();
	

 ?>
 

 
<!DOCTYPE HTML>
<html lang="es">
	
	<head>
		<meta charset="UTF-8"  />
		<title> Filtro </title>
		<meta name="description" content="Esta es una pagina para filtrar los usuarios a modificar" />
		<link rel="stylesheet" href="../style.css" />
	</head>
	<body>
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
				
				<table border="4" cellpadding="5px" cellspacing="5px">
				<tr>
					<th>Email</th><th>Nombre</th>
				</tr>
				<?php
				foreach($resultado as $a){ ?>
				<tr cellpadding="5px" cellspacing="5px">
					<td ><a href="modificar.php?email=<?php echo $a[0]; ?>"><?php echo $a[0]?></a></td>
					<td><?php echo $a[1]?></td>
				</tr>
				<?php
				}

			}
		}
		 ?>
			
	</body>
	
</html>