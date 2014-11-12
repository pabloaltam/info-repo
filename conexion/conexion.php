<?php
$conex = mysqli_connect("sql4.freesqldatabase.com","sql457930","vV9!bJ4%","sql457930",3306);
if ($conex->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $conex->connect_errno . ") " . $conex->connect_error;
}
?>