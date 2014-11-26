<?php
if (\basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'conexion') { echo '<script>alert("Que intentas hacer?");self.location="/index.php"</script>';die();}
 class Conectar {

    function conectar() {
        $conex = mysqli_connect("localhost", "root", "inacap.2014", "inforeddb");
        if ($conex->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $conex->connect_errno . ") " . $conex->connect_error;
        }
        return ($conex);
    }
}
?>