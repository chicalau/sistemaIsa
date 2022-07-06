<?php

$s=$_GET['pro'];

include ('conect.php');

$u="DELETE FROM isa_producto WHERE isa_producto.id_producto='$s'";

$ejec=mysqli_query($conexion,$u);

if(!$ejec) {
    echo "error, no se eliminaron datos";
}
else {
    header("location:productlist.php"); 
}

?>