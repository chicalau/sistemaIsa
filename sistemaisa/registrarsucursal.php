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
            
            <form action="agregarsucursal.php" method="post">
            <div class="inputtext" for="codsucursal">    
            <label for="codsucursal">  
                <span>Código sucursal:</span>
                <input class="texto" type="number" name="codsucursal" id="codsucursal" required>
            </label>
            </div>
            <div class="inputtext" for="nombresucursal">
            <label for="nombresucursal">  
                <span>Nombre sucursal:</span>
                <input class="texto" type="text" name="nombresucursal" id="nombresucursal" required>
            </label>
            </div>
            <div class="inputtext" for="direccionsucursal">
            <label for="direccionsucursal">  
                <span>Dirección:</span>
                <input class="texto" type="text" name="direccionsucursal" id="direccionsucursal" required>
            </label>                
            </div>
            <div class="butoncontainer">
                <input type="submit" value="Guardar" class="buton">
            </div>
            </form>
        </div>
    </main>
</body>        
