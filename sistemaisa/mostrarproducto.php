<?php
include ('conect.php');

$consultaproducto="SELECT * FROM isa_producto";
$ejecutarproducto=mysqli_query($conexion,$consultaproducto);
$filasproducto=mysqli_num_rows($ejecutarproducto);

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Esta página es un sistema de pedidos para p">
        <meta name="robots" content="indez,follow">
        <title> Sistema ISA </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/index.css">
    </head>
    <body>
    <p>cantidad de registros:<?php echo $filasproducto; ?> </p>

        <?php
        while ($s=mysqli_fetch_array($ejecutarproducto)) {
        ?>

            <p>
            <?php
            echo $s['id_producto'];
            echo $s['nombreProducto'];
            echo $s['precioProducto'];
            ?>
            </p>

        <?php
        }
        ?>
        
    </body>
</html>