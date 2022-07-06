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
        <form action="form1.php" method="post" class="formpedido">
    
            <h2>Registrar cliente</h2><br><br>
            <label class="inputradio" for="tipocliente">
                <span>Tipo de Cliente:</span>
                <input class="radio" type="radio" name="tipocliente" id="tipocliente" value="persona"> <span class="radiotext">Cliente persona</span> 
                <input class="radio" type="radio" name="tipocliente" id="tipocliente" value="empresa"> <span class="radiotext">Cliente empresa</span>
            </label>
            <label class="inputtext" for="id_cliente">
            <span> Cedula/NIT:</span>
                <input class="texto" type="number" name="id_cliente" id="id_cliente" placeholder="id_cliente" required>
            </label>   
            <label class="inputtext" for="nombre">
                <span>Nombre:</span>
                <input class="texto" type="text" name="nombre" id="nombre" required>
            </label>
            <label class="inputradio" for="genero">
                <span>Genero:</span>
                <input class="radio" type="radio" name="genero" id="genero" value="f"><span class="radiotext">Femenino</span>
                <input class="radio" type="radio" name="genero" id="genero" value="m"><span class="radiotext">Masculino</span>
                <input class="radio" type="radio" name="genero" id="genero" value="no"><span class="radiotext">No identificado</span>
            </label>
            <label class="inputfecha" for="fechanacimiento">
                <span>Fecha de nacimiento:</span>
                <input class="selectfecha" type="date" name="fechanacimiento" id=fechanacimiento>
            </label>            
            <label class="inputtext" for="telefono">
                <span>Teléfono:</span>
                <input class="texto" type="number" name="telefono" id="telefono" >
            </label>
            <label class="inputtext" for="direccion">
                <span>Dirección:</span>
                <input class="texto" type="text" name="direccion" id="direccion" >
            </label>
            <label class="inputtext" for="email">
                <span>Email:</span>
                <input class="texto" type="email" name="email" id="email">
            </label><br><br><br>
                     
            <input type="submit" value="Registrar cliente" class="registrar" >
        </form>
        <?php 
    include ('conect.php');
    if(isset($_POST['tipocliente'], $_POST['id_cliente'], $_POST['nombre'], $_POST['genero'],
     $_POST['fechanacimiento'], $_POST['telefono'], $_POST['direccion'], $_POST['email'])) {   
    $tipo_cliente=$_POST['tipocliente'];
    $id_cliente=$_POST['id_cliente'];
    $nombre_cliente=$_POST['nombre'];
    $genero_cliente=$_POST['genero'];
    $fecha_nacimiento=$_POST['fechanacimiento'];
    $telefono_cliente=$_POST['telefono'];
    $direccion_cliente=$_POST['direccion'];
    $email_cliente=$_POST['email'];

    $consulta=
    "INSERT INTO isa_cliente (id_cliente, nombreCliente, tipoCliente, genero,
     fechaNacimiento, telefono, direccion, email)
     VALUES 
     ('$id_cliente','$nombre_cliente','$tipo_cliente','$genero_cliente',
     '$fecha_nacimiento','$telefono_cliente','$direccion_cliente','$email_cliente')";
     
     $run=mysqli_query($conexion,$consulta);
    
     if (!$run) {
        echo "error no guardados";
    }
    else {
        header ("location:form2.php?cedula=$id_cliente");
    }
    }
    ?>
     
    </div>
    </main>
</body>
</html>