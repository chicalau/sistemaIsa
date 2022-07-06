<?php

$s=$_GET['suc'];

include ('conect.php');

$u="DELETE FROM isa_sucursal WHERE isa_sucursal.id_sucursal='$s'";

$ejec=mysqli_query($conexion,$u);

if(!$ejec) {
    echo "error, no se eliminaron datos";
}
else {
    header("location:sucursaleslist.php"); 
}

?>

