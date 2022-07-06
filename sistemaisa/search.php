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
            <form action="search.php" method="get">
            <label class="searchbox" for="buqueda">
                    <input class="search" type="text" id="busqueda" name="busqueda" placeholder="Ingrese cedula del cliente">
                    <input class="butonsearch" type="submit" value="Buscar cliente">            
            </label>           
            </form><br><br>
            <form action="searchfecha.php"></form>
            <label class="filtrobox" for="buscarfecha">
                <span class="filtrotext">Buscar por fecha de entrega:</span>
                <input class="calendario" type="date" name="buscarfecha" id="buscarfecha">
                <input class="butonfiltrar" type="submit" value="Buscar">
            </label>
            </form>
            
            <?php
            include ('conect.php');

            if(isset($_GET ["busqueda"])){
            $c=$_GET ["busqueda"];
            $consulta="SELECT * FROM isa_cliente WHERE isa_cliente.id_cliente='$c'";
            $ejecutar=mysqli_query($conexion,$consulta);
            $fila=mysqli_num_rows($ejecutar);

            if($fila!=0){
            while ($d=mysqli_fetch_array($ejecutar)){
            
            ?>

            <div class="textlist">
                <span class="texto">Clientes encontrados</span>
                <span><?php echo $fila; ?></span>
            </div>
            <div class="resultlist">
                <table class="tablelist">
                    <tr>
                        <td><?php echo "Cc: " .$d['id_cliente'];?></td>
                        <td><?php echo $d['nombreCliente'];?></td>
                        <td><?php echo "Tel: " .$d['telefono'];?></td>
                        <td><?php echo "email: " .$d['email'];?></td>
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
