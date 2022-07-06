<?php 
    
    include ('conect.php');
    if(isset($_POST['id_cliente'],$_POST['sucursal'], $_POST['fechapedido'], $_POST['ocasion'], $_POST['especificaciones'],
    $_POST['fechaentrega'], $_POST['domicilio'], $_POST['lugarentrega'], $_POST['id_cliente'])) {   
    
        $id_cliente=$_POST['id_cliente'];
        $sucursal_pedido=$_POST['sucursal'];
        $fecha_pedido=$_POST['fechapedido'];
        $ocasion_pedido=$_POST['ocasion'];
        $especificaciones_pedido=$_POST['especificaciones'];
        $fecha_entrega=$_POST['fechaentrega'];
        $domicilio_pedido=$_POST['domicilio'];
        $lugar_entrega=$_POST['lugarentrega']; 
    
    $consulta="INSERT INTO isa_pedido (id_pedido, fechaPedido, ocasion, especificaciones, fechadeEntrega,
     domicilio, lugarEntrega, id_sucursal, id_cliente)
     VALUES ('','$fecha_pedido','$ocasion_pedido','$especificaciones_pedido',
     '$fecha_entrega','$domicilio_pedido','$lugar_entrega','$sucursal_pedido','$id_cliente')";
     
     $run=mysqli_query($conexion,$consulta);
    
    if (!$run) {
        echo "error no guardados";
    }
    else
    {
        header ("location:form3.php");
    }
    }
    ?>
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
        <form action="form2.php" method="post" class="formpedido">
    
            <h2>Registrar pedido</h2><br><br>
        <label class="inputoption" for="id_cliente">   
        <h4 class="codigopedido">
            <span>Verifique documento del cliente:</span>
            <input class="textofix2" type="text" name="id_cliente" id="id_cliente" required>
        </h4>
        </label>  
        <label  class="inputoption" for="sucursal">
            <?php            
            include ('conect.php');

            $consultasucursal="SELECT * FROM isa_sucursal";
            $ejecutarsucursal=mysqli_query($conexion,$consultasucursal);
            ?>
                <span>Sucursal:</span>
                
                <input class="selectlist" list="nombresucursal" name="sucursal" class="list" required>
                
                <datalist id="nombresucursal">  
                    <?php
                    while ($p=mysqli_fetch_array($ejecutarsucursal)) {
                    ?>
                    <option value="<?php echo $p['id_sucursal']; ?>"><?php echo $p['nombreSucursal']. "  --  " . $p['direccionSucursal']?></option>
                    <?php
                    }
                    ?>
                </datalist>             
        </label>
            <label class="inputfecha" for="fechapedido">
                <span>Fecha de pedido:</span>
                <input class="selectfechaforz2" type="date" name="fechapedido" id="fechapedido" min="2021/09/09" max="2021/12/12" placeholder="vacio">
            </label>     
             <label class="inputoption" for="ocasion">
                <span>Ocasión:</span>
                <input class="selectlist" list="ocasion" name="ocasion" class="list">
                <datalist id="ocasion">                    
                    <option value="Cumpleaños"></option>
                    <option value="Aniversario"></option>
                    <option value="15 años"></option>
                    <option value="Grados"></option>
                    <option value="Bautizo"></option>
                    <option value="Primera comunion"></option>
                    <option value="Día de la mujer"></option>
                    <option value="Día del hombre"></option>
                    <option value="Día del maestro"></option>
                    <option value="Día de la enfermera"></option>
                    <option value="Día de la madre"></option>
                    <option value="Día del padre"></option>
                    <option value="Halloween"></option>
                    <option value="Amor y amistad"></option>
                    <option value="Navidad"></option>
                    <option value="Día del medico"></option>
                    <option value="Dia del abogado"></option>
                    <option value="Día del ingeniero"></option>
                    <option value="Día de la secretaria"></option>
                    <option value="Matrimonio"></option>
                    <option value="Aniversarios empresariales"></option>
                </datalist>             
            </label>
            <label class="inputtxtarea" for="especificaciones">
                <span>Especificaciones:</span>
                <textarea class="txtarea" name="especificaciones" id="especificaciones" cols="30" rows="4"></textarea>
            </label>            
            <label class="inputfecha" for="fechaentrega">
                <span>Fecha de entrega:</span>
                <input class="selectfechaforz1" type="date" name="fechaentrega" id="fechaentrega" required>
            </label>
            <label class="inputradio" for="domicilio">
                <span>Domicilio:</span>
                <div class="fixradiobuton">
                <input class="radio" type="radio" name="domicilio" id="domicilio" value="01"> <span class="radiotext"> Si</span>
                <input class="radio" type="radio" name="domicilio" id="domicilio" value="00"> <span class="radiotext"> No</span>
                </div>
            </label>
            <label class="inputtext" for="lugarentrega">
                <span>Lugar entrega:</span>
                <input class="textofix1" type="text" name="lugarentrega" id="lugarentrega" required>
            </label><br><br><br>
            <input type="submit" value="Guardar detalle pedido" class="registrar">

        </form>
        </div>
    </main>
</body>
</html>