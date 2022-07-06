<?php

$s=$_GET['produ'];

include ('conect.php');

$z= "SELECT * FROM isa_producto WHERE isa_producto.id_producto='$s'";
$ejec=mysqli_query($conexion,$z);

?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/editorbbdd.css">
    <title>Formulario</title>
</head>
<body>
    <header>
        <div class="title">
        <h1>SISTEMA ISA</h1>
            <a href="productlist.php" class="btregresar">&#8592 Regresar</a>
        </div>
    </header>
    <main>
       
        <div class="containerform">
            <h2>Administrador: Gestionar productos</h2><br><br>
            <?php
            while ($d=mysqli_fetch_array($ejec)) {
            ?>    
            <form action="modificarproducto2.php" method="post">
            <div class="inputtext" for="nombre">    
            <label for="codproducto">  
                <span>Codigo producto:</span>
                <span><?php echo $d['id_producto']; ?></span>
                <input type="hidden" name="codproducto" value="<?php echo $d['id_producto']; ?>">
            </label>
            </div>
            <div class="inputtext" for="nombre">
            <label for="nombreproducto">  
                <span>Descripción:</span>
                <input class="texto" type="text" name="nombreproducto" id="nombreproducto" value="<?php echo$d['nombreProducto'];?>">
            </label>
            </div>
            <div class="inputtext" for="nombre">
            <label for="precioproducto">  
                <span>Precio:</span>
                <input class="texto" type="number" name="precioproducto" id="precioproducto" value="<?php echo$d['precioProducto'];?>">
            </label>                
            </div>
            <div class="butoncontainer">
                <input type="submit" value="Modificar" class="buton">
            </div>
            </form>
            <?php
            }
            ?>
        </div>
    </main>
</body>    