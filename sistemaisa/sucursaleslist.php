<?php
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
        <link rel="stylesheet" href="style/sucursaleslist.css   "  >
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
            <h2>Administrador: Gestionar sucursales</h2><br><br><br>
            <table class="tablelist">
            <?php
            while ($s=mysqli_fetch_array($ejecutar)) {
            ?>
                <tr>
                    <td><?php echo $s['id_sucursal'];?></td>
                    <td><?php echo $s['nombreSucursal'];?></td>
                    <td><a class="butoneliminar" href="eliminarsucursal.php?suc=<?php echo $s['id_sucursal'];?>">Eliminar</a></td>
                    <td><a class="buton" href="modificarsucursal.php?sucu=<?php echo $s['id_sucursal']; ?>">Editar</a></td>
                </tr>
            <?php
            }
            ?>
            </table>
            <a class="registrarnuevo" href="registrarsucursal.php">Agregar nueva sucursal</a> 
            </div>
        </main>
    </body>
</html>