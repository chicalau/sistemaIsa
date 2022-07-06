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
        <link rel="stylesheet" href="style/productlist.css"  >
    </head>
    <body>
        <header>
            <div class="title">
                <h1>SISTEMA ISA</h1>
                <a href="admonppal.html" class="btregresar">&#8592 Regresar</a>
            </div>
        </header>
        <main>
            <div class="containerproductlist">
                <h2>Administrador: Gestionar productos</h2><br><br><br>
                <table class="tablelist">
                <?php
                while ($s=mysqli_fetch_array($ejecutarproducto)) {
                ?>  
                <tr>
                    <td><?php echo $s['id_producto']; ?></td>
                    <td><?php echo $s['nombreProducto']; ?></td>
                    <td><a class="butoneliminar" href="eliminarproducto.php?pro=<?php echo $s['id_producto']; ?>">Eliminar</a></td>
                    <td><a class="buton" href="modificarproducto.php?produ=<?php echo $s['id_producto']; ?>">Editar</a></td>
                </tr>
                <?php
                }
                ?>
                </table><br><br><br>
                <a class="registrarnuevo"href="registrarproducto.php">Agregar nuevo producto</a>    
            </div>
        </main>
    </body>
</html>