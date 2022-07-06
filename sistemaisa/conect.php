<?php

$conexion=mysqli_connect("localhost","root","","bbddlaurachica");

if (!$conexion) {
    die ("connection failed:".mysqli_connect_error($conexion));
    echo "imposible conectarse";
}

return $conexion;

?>
