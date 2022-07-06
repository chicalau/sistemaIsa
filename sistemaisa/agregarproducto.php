<?php
    $id_producto=$_POST['codproducto'];
    $nombre_producto=$_POST['nombreproducto'];
    $precio_producto=$_POST['precioproducto'];

    include ('conect.php'); 

    $consulta=
    "INSERT INTO isa_producto (id_producto, nombreProducto, precioProducto)
     VALUES 
     ('$id_producto','$nombre_producto','$precio_producto')";

    $run=mysqli_query($conexion,$consulta);

    if (!$run) {
      echo "error no guardados";
    }
    else {
      header ("location:productlist.php");
    }
    //se supone q el header hace los datos visibles en el form
    
?>