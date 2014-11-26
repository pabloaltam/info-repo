<?php
if (\basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'conexion') { echo '<script>alert("Que intentas hacer?");self.location="/index.php"</script>';die();}
 class Conectar {

    function conectar() {
        $conex = mysqli_connect("db4free.net","inforeduser","inforedpass","inforeddb");
        if ($conex->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $conex->connect_errno . ") " . $conex->connect_error;
        }
        return ($conex);
    }
}
?>