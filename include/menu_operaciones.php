<div class="panel panel-default">
        <div class="panel-heading"><h3>Bienvenido, <?php echo "$nombre"." $apellidos";?>. </h3>
<a class="btn btn-xs btn-primary" href="/operaciones/usuario.php">
          <i class="fa fa-user fa-lg"></i> Panel</a>
            
            <?php 
				
				if ($perfil_usuario=="admin") {
					?>

							<a class="btn btn-xs btn-primary" href="/operaciones/registro/registro.php"><i class="fa fa-plus-square fa-lg"></i> Agregar usuario</a>
							<a class="btn btn-xs btn-primary" href="/operaciones/modificar/modifica_iframe.php"><i class="fa fa-refresh fa-lg"></i> Modificar usuario</a>
					<?php 
				} else {
					
				}
				
				 ?>
            
            <a class="btn btn-xs btn-primary" href="/operaciones/desconectar.php">
          <i class="fa fa-sign-out fa-lg"></i> Cerrar sesión</a>
        
        </div>
                
    </div>