<?php
            include ('conect.php');

            if(isset($_GET ["buscarfecha"])){
            $c=$_GET ["buscarfecha"];
            $consulta="SELECT * FROM isa_pedido WHERE isa_pedido.fechadeEntrega='$c'";
            $ejecutar=mysqli_query($conexion,$consulta);
            $fila=mysqli_num_rows($ejecutar);

            if($fila!=0){
            while ($d=mysqli_fetch_array($ejecutar)){
            
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
            <a href="index.html" class="btregresar">&#8592 Regresar</a>
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
                <table class="tablelist">
                    <tr>
                        <td><?php echo "Cc: " .$d['id_cliente'];?></td>
                        <td><?php echo "Codpedido: " .$d['id_pedido'];?></td>
                        <td><?php echo "Fecha entrega: " .$d['fechadeEntrega'];?></td>
                        <td><?php echo "Ocasion: " .$d['ocasion'];?></td>
                        <td><?php echo "Domicilio: " .$d['domicilio'];?></td>
                        <td><a href="search2.php?cedu=<?php echo $d['id_cliente'];?>">ver pedidos&#187</a></td>
                    </tr>  
                </table>
                
            <?php
               }
            }
            }    
            ?>
            </div>

        </div>
        </main>

    </body>

</html>