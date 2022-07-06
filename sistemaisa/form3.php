<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/form1.css">
    <title>Formulario</title>
</head>
<body>
    <header>
        <div class="title">
        <h1>SISTEMA ISA</h1>
            <a href="index.html" class="btregresar">&#8592 Regresar</a>
        </div>
    </header>
        <main>
        <div class="containerform">
        <?php

            include('conect.php');

            $consultamax= "SELECT id_pedido FROM isa_pedido
            WHERE id_pedido=(SELECT max(id_pedido)
                 FROM isa_pedido)";

            $run=mysqli_query($conexion,$consultamax);

            while ($s=mysqli_fetch_array($run)){
        ?>
            <h2>Registrar productos - Codigo pedido: <?php echo $s['id_pedido'];?> </h2><br><br>  

        <?php
            }
        ?>
        <form action="form3.php" method="post"> 
                <table class="tablelist">
                    <tr>
                        <th>Seleccionar producto</th>
                        <th>Cantidad</th>
                        <th>Codigo pedido</th>
                
                    </tr>
                    <tr>
       
                        <td>
                            <label  class="inputoption" for="producto">
                            <?php            
                                include ('conect.php');

                                $consulta="SELECT * FROM isa_producto";            
                                $ejecutar=mysqli_query($conexion,$consulta);
                            ?>
                    
                            <input class="selectlist" list="nombreproducto" name="producto">                
                            <datalist id="nombreproducto">   
                   
                                <?php                
                                    while ($p=mysqli_fetch_array($ejecutar)){    
                                ?>                
                                <option value="<?php echo "Codigo: ".$p['id_producto'];?>">
                                <?php echo "Descripcion: ".$p['nombreProducto']." -- "."Precio $= ".$p['precioProducto'];?>  
                                </option>
                    
                                <?php
                                    }
                                ?> 
                            </datalist>
                
                            </label>            
                        </td>
                        <td><input class="textofix1" type="text" name="cantidadproducto" id="cantidadproducto"></td>
                        <td><input class="textofix1" type="text" name="codpedido" id="codpedido" placeholder="Verficar"></td>
            
                    </tr>                   
                </table><br><br><br>
                <input type="submit" value="Agregar producto" class="registrar"><br><br>
                <a class="registrar" href="index.html">Finalizar</a>
        </form> 

        <?php 
            include ('conect.php');
            if(isset($_POST['producto'],$_POST['cantidadproducto'], $_POST['codpedido'])) {   
    
            $id_producto=$_POST['producto'];
            $cantidad_producto=$_POST['cantidadproducto'];
            $id_pedido=$_POST['codpedido'];
    
            $consulta="INSERT INTO isa_productospedido (id_productospedido, cantidadProducto, id_producto, id_pedido)
             VALUES ('','$cantidad_producto','$id_producto','$id_pedido')";
     
            $run=mysqli_query($conexion,$consulta);
    
             if (!$run) {
            echo "error no guardados";
            }
            else {
            header ("location:form3.php");

            }
            }
        ?>  
    </div>
    </main>
</body>
</html>        