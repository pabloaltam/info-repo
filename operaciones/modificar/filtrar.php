<?php 
require('../../include/session.php');

	date_default_timezone_set("America/Santiago");

	ini_set("display_errors",0);
	require ('clase_buscar_usuario.php');
	
	$obj_Usuario= new Usuario();
	

 ?>
                <fieldset>
                  <legend>Filtro de Usuarios</legend>
		<form action="filtrar.php" method="post" target="_self">
			<label for="txt_busqueda">Filtrar:</label>
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
</fieldset>