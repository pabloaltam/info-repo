<?php require '../include/session.php'; ?>

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
    <!-- Static navbar -->
    <?php require '../include/menu.php'; ?>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">


                        
                    <div class="bs-example">
<?php require '../include/menu_operaciones.php'; ?>
                    

      <!-- Table -->
       <div class="well bs-component">
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
  </div>    
        </div>
                
            </div>
            
        </div>
    </div>
      </div>
<?php require '../include/pie.php'; ?>