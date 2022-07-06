<?php

$s=$_GET['pedido'];

include ('conect.php');

$u="DELETE FROM isa_pedido WHERE isa_pedido.id_pedido='$s'";

$ejec=mysqli_query($conexion,$u);

if(!$ejec) {
    echo "error, no se eliminaron datos";
}
else {
    header("location:search.php"); 
}
?>
