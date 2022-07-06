<?php
    $id_sucursal=$_POST['codsucursal'];
    $nombre_sucursal=$_POST['nombresucursal'];
    $direccion_sucursal=$_POST['direccionsucursal'];

    include ('conect.php'); 

    $consulta=
    "INSERT INTO isa_sucursal (id_sucursal, nombreSucursal, direccionSucursal)
     VALUES 
     ('$id_sucursal','$nombre_sucursal','$direccion_sucursal')";

    $run=mysqli_query($conexion,$consulta);

    if (!$run) {
      echo "error no guardados";
    }
    else {
      header ("location:sucursaleslist.php");
    }
    
?>