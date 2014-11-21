<?php
class Conectar{
function conectar(){
    $conex = mysqli_connect("db4free.net","inforeduser","inforedpass","inforeddb",3306);
if ($conex->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conex->connect_errno . ") " . $conex->connect_error;
}
return ($conex);
}
}
?>