<?php

$s=$_GET['sucu'];

include ('conect.php');

$z= "SELECT * FROM isa_sucursal WHERE isa_sucursal.id_sucursal='$s'";
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
            <a href="sucursaleslist.php" class="btregresar">&#8592 Regresar</a>
        </div>
    </header>
    <main>
       
        <div class="containerform">
            <h2>Administrador: Gestionar sucursales</h2><br><br>
            <?php
            while ($d=mysqli_fetch_array($ejec)) {
            ?>    
            <form action="modificarsucursal2.php" method="post">
            <div class="inputtext" for="nombre">    
            <label for="codsucursal">  
                <span>Codigo sucursal:</span>
                <span><?php echo $d['id_sucursal']; ?></span>
                <input type="hidden" name="codsucursal" value="<?php echo $d['id_sucursal']; ?>">
            </label>
            </div>
            <div class="inputtext" for="nombre">
            <label for="nombresucursal">  
                <span>Nombre sucursal:</span>
                <input class="texto" type="text" name="nombresucursal" id="nombresucursal" value="<?php echo$d['nombreSucursal'];?>">
            </label>
            </div>
            <div class="inputtext" for="direccion">
            <label for="direccionsucursal">  
                <span>Direccion sucursal:</span>
                <input class="texto" type="text" name="direccionsucursal" id="direccionsucursal" value="<?php echo$d['direccionSucursal'];?>">
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