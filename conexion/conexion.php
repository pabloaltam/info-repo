<?php
$conex = mysqli_connect("localhost","root","root",'u332152429_info');
if ($conex->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $conex->connect_errno . ") " . $conex->connect_error;
}
echo $conex->host_info . "\n";
?>