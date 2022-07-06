<?php

include ('conect.php');

$s=$_POST['codsucursal'];
$n=$_POST['nombresucursal'];
$d=$_POST['direccionsucursal'];



$c="UPDATE isa_sucursal SET nombreSucursal='$n' , direccionSucursal='$d' WHERE isa_sucursal.id_sucursal='$s'";
$ejecutar=mysqli_query($conexion,$c);


if(!$ejecutar){

    echo "error no se guardaron los cambios";
}
else {
    header ("location:sucursaleslist.php");
}

?>