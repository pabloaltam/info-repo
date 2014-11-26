<?php
require '../../include/session.php';
$nombre = $_POST['txt_nombre'];
$apellido = $_POST['txt_apellido'];
$email = $_POST['txt_email'];
$contraseña = $_POST['txt_contraseña'];
$perfilUsuario = $_POST['radio'];

if (!(empty($nombre) || empty($apellido) || empty($email) || empty($contraseña) || empty($perfilUsuario))) {
    require_once('../clase-operaciones.php');
    $obj_usuario = new usuarios();

    try {
        $obj_usuario->agregarUsuarios($nombre, $apellido, $email, $contraseña, $perfilUsuario);
        if ($obj_usuario == true) {
            echo "<script>alert('exito!!')</script>";
        } else {
            echo "<script>alert('no se ah ingresado')</script>";
        }
    } catch (Exception $e) {
        echo "Error : " . $e->getMessage();
    }
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Documento sin título</title>
        </head>
        <a href="/operaciones/usuario.php">Continuar</a>
        <body>
        </body>
    </html>
<?php } else {
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Documento sin título</title>
        </head>
        <h1>Completa todos los campos</h1>
        <a href="/operaciones/registro/registro.php">Reintentar</a>
        <body>
        </body>
    </html>
<?php } ?>
