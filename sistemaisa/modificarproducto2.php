<?php

include ('conect.php');

$p=$_POST['codproducto'];
$n=$_POST['nombreproducto'];
$pr=$_POST['precioproducto'];

echo $p;
echo $n;
echo $pr;

$c="UPDATE isa_producto SET nombreProducto='$n' , precioProducto='$pr' WHERE isa_producto.id_producto='$p'";
$ejecutar=mysqli_query($conexion,$c);


if(!$ejecutar){

    echo "error no se guardaron los cambios";
}
else {
    header ("location:productlist.php");
}

?>