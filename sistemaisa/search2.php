<?php

$s=$_GET['cedu'];

include ('conect.php');

$z= "SELECT c.id_cliente, c.nombreCliente, c.telefono, p.id_pedido, p.fechaPedido, p.ocasion,
COUNT(o.id_producto) AS productos,
GROUP_CONCAT(o.nombreProducto,' (', r.cantidadProducto,') ') as productos
FROM isa_cliente AS c
LEFT JOIN isa_pedido AS p
ON p.id_cliente=c.id_cliente
LEFT JOIN isa_productospedido AS r
ON r.id_pedido=p.id_pedido
LEFT JOIN isa_producto AS o
ON o.id_producto=r.id_producto
WHERE c.id_cliente='$s'
GROUP BY p.id_pedido";

$ejecutar=mysqli_query($conexion,$z);
$fila=mysqli_num_rows($ejecutar);

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Esta página es un sistema de pedidos para p">
        <meta name="robots" content="indez,follow">
        <title> Sistema ISA </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/search.css">
    </head>
    <body>
        <header>
            <div class="title">
            <h1>SISTEMA ISA</h1>
            <a href="search.php" class="btregresar">&#8592 Regresar</a>
            </div>
        </header>
        <main>
        <div class="containersearchform">
            <h2>Gestionar pedidos</h2><br><br>
            <div class="textlist">
                <span class="texto">Pedidos encontrados</span>
                <span><?php echo $fila; ?></span>
            </div>
            <div class="resultlist">
            <?php
            while($row = mysqli_fetch_array($ejecutar)){ 
            ?>    
                <table class="tablelist">
                    <tr>
                        <td><?php echo $row['nombreCliente'];?></td>
                        <td><?php echo "Codpedido: ".$row['id_pedido'];?></td>
                        <td><?php echo "Fecha: ".$row['fechaPedido'];?></td>
                        <td><?php echo "Ocasion: ".$row['ocasion'];?></td>
                        <td><a href="resumpedido.php?codpedido=<?php echo $row['id_pedido'];?>">ver&#187</a></td>
                    </tr>  
                </table>
            <?php
            }
            ?>
            </div>
        </div>
        </main>
    </body>