<?php require '../../include/session.php'; ?>
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
<?php require '../../include/menu.php'; ?>   
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
            <div class="bs-example">
<?php require '../../include/menu_operaciones.php'; ?>   
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
<?php require '../../include/pie.php'; ?>