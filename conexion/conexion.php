<?php
$conex = mysqli_connect("mysql8.000webhost.com","a2962834_infored","inacap2020","a2962834_infored");
if ($conex->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $conex->connect_errno . ") " . $conex->connect_error;
}
?>