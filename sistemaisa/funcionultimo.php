<?php

include('conect.php');

$consultamax= "SELECT id_pedido FROM isa_pedido
WHERE id_pedido=(SELECT max(id_pedido)
                 FROM isa_pedido)";

$run=mysqli_query($conexion,$consultamax);

while ($s=mysqli_fetch_array($run)){

    echo $s['id_pedido'];
}

?>
<?php
            