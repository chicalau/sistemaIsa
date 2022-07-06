<?php
$s=$_GET['codpedido'];

include ('conect.php');

$z= "SELECT c.id_cliente, c.nombreCliente, c.telefono, c.email, p.id_pedido, p.fechaPedido,
p.especificaciones, p.fechadeEntrega, p.lugarEntrega,
COUNT(o.id_producto) AS qproductos,
GROUP_CONCAT(o.nombreProducto,' (', r.cantidadProducto,') ') as productos,
r.cantidadProducto*o.precioProducto AS preciotot
FROM isa_pedido AS p
LEFT JOIN isa_cliente AS c
ON c.id_cliente=p.id_cliente
LEFT JOIN isa_productospedido AS r
ON r.id_pedido=p.id_pedido
LEFT JOIN isa_producto AS o
ON o.id_producto=r.id_producto
WHERE p.id_pedido='$s'";

$ejecutar=mysqli_query($conexion,$z);
$fila=mysqli_num_rows($ejecutar);
           

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/resumpedido.css">
    <title>Formulario</title>
</head>
<body>
    <header>
        <div class="title">
        <h1>SISTEMA ISA</h1>
            <a href="search.php" class="btregresar">&#8592 Regresar</a>
        </div>
    </header>
    <main>
     
            <?php
            while ($row = mysqli_fetch_array($ejecutar)){ 
            ?>   
        <div class="containerform">
            
             
                <h2>Resumen pedido</h2><br><br>
                <div class="inputtext" for="id_cliente">
                <span> Cedula/NIT:</span>
                <span class="texto"><?php echo $row['id_cliente'];?></span>
                </div>   
                <div class="inputtext" for="nombre">
                <span>Nombre:</span>
                <span class="texto"><?php echo $row['nombreCliente'];?></span>
                </div>            
                <div class="inputtext">
                <span>Teléfono:</span>
                <span class="texto"><?php echo $row['telefono'];?></span>
                </div>
                <div class="inputtext">
                <span>Email:</span>
                <span class="texto"><?php echo $row['email'];?></span>
                </div>
                <h4 class="codigopedido">Código Pedido <?php echo $row['id_pedido'];?></h4>
                <div class="inputtext">
                <span>Fecha de pedido:</span>
                <span class="textofix1"><?php echo $row['fechaPedido'];?></span>
                </div>
            <table class="tablelist">
                <tr>
                    <th>Cantidad de productos</th>
                    <th>Descripción de productos</th>
                
                </tr>
                <tr>
                    <td><?php echo $row['qproductos'];?></td>
                    <td><?php echo $row['productos'];?></td>                                                             
                </tr>
            </table><br><br>
                <div class="inputtxtarea" for="especificaciones">
                <span>Especificaciones:</span>
                <textarea class="txtarea" cols="30" rows="4"><?php echo $row['especificaciones'];?></textarea>
                </div>            
                <div class="inputtext" for="fechaentrega">
                <span>Fecha de entrega:</span>
                <span class="textofix1"><?php echo $row['fechadeEntrega'];?></span>
                </div>
                <div class="inputtext">
                <span>Lugar entrega:</span>
                <span class="textofix1"><?php echo $row['lugarEntrega'];?></span>  
                </div>
            <td><a class="butoneliminar" href="eliminarpedido.php?pedido=<?php echo $row['id_pedido'];?>">Eliminar pedido</a></td>
            <?php
            }
        
            ?>
        </div>
    </main>
</body>
</html>