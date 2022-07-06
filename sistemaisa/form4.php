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