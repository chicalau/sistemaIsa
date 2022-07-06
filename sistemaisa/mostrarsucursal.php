<?php
//este mismo codigo deberia ir en sucursaleslist
include ('conect.php');

$consulta="SELECT * FROM isa_sucursal";
$ejecutar=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($ejecutar);

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
    <p>cantidad de registrros:<?php echo $filas; ?> </p>

        <?php
        while ($s=mysqli_fetch_array($ejecutar)) {
        ?>

            <p>
            <?php
            echo $s['id_sucursal'];
            echo $s['nombreSucursal'];
            echo $s['direccionSucursal'];
            ?>
            </p>

        <?php
        }
        ?>
        
    </body>
</html>

