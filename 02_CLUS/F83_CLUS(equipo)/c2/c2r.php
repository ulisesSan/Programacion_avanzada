<?php
include ("c2.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport", content="width-device-width, user-scalable-no, inicial-scale=1.0,
maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="a.css">
</head>
<body>
<?php
if (isset($_POST['r2'],$_POST['r1'])){
    $dato2 = $_POST['r2'];
    $dato1 = $_POST['r1'];
    if($dato1<$dato2){
        menor($dato1,$dato2);
        s();
    }else if ($dato1>$dato2){
        mayor($dato1,$dato2);
        s2();
    }else if($dato1=$dato2){
        igual($dato1,$dato2);
        s3();
    }else{
        echo "No existe";
    }
}
else{
    echo "no se mando nada";
}?>
</body>
</html>


<?php
function menor($dato1,$dato2){
    $conexion=con();
    mysqli_set_charset($conexion,"utf8");
    $usuarios = "SELECT pedidos.id_pedido,pedidos.id_producto,productos.nombres,pedidos.fecha,pedidos.cantidad_pedido,provedor.nombre FROM pedidos,productos,provedor WHERE pedidos.id_producto=productos.id_prod AND provedor.id_provedor=productos.id_provedor AND cantidad_pedido>$dato1 AND cantidad_pedido<$dato2 ORDER BY provedor.nombre";
    $resultado = mysqli_query($conexion, $usuarios);
    if (!$resultado){
        echo "no se muestra";
    }
    else{ {?>
        <div class="contenedo">
        <div class="titulo">Pedidos</div>
        <div class="cuerpo">Id Pedido</div>
        <div class="cuerpo">Id Producto</div>
        <div class="cuerpo">Nombre</div>
        <div class="cuerpo">Fecha</div>
        <div class="cuerpo">Cantidad</div>
        <div class="cuerpo">Nombre del Provedor</div>

    <?php } while($row=mysqli_fetch_assoc($resultado)) { ?>
        <div class="item" ><?php echo $row["id_pedido"];?></div>
        <div class="item" ><?php echo $row["id_producto"];?></div>
        <div class="item" ><?php echo $row["nombres"];?></div>
        <div class="item" ><?php echo $row["fecha"];?></div>
        <div class="item" ><?php echo $row["cantidad_pedido"];?></div>
        <div class="item" ><?php echo $row["nombre"];?></div>
    <?php } mysqli_free_result($resultado);{?>
        </div>
    <?php }}}
function s(){ {?>
    <div class="healer" >
        <center>
            <p id="linea"></p>
            <h5>la consulta es SELECT pedidos.id_pedido,pedidos.id_producto,productos.nombre,pedidos.fecha,pedidos.cantidad_pedido,provedor.nombre FROM pedidos,productos,provedor WHERE pedidos.id_producto=productos.id_prod AND provedor.id_provedor=productos.id_provedor AND cantidad_pedido>$dato1 AND cantidad_pedido<$dato2 ORDER BY provedor.nombre </h5>
        </center>
    </div>
<?php }}?>

<?php
function mayor($dato1,$dato2){
    $conexion=con();
    mysqli_set_charset($conexion,"utf8");
    $usuarios = "SELECT pedidos.id_pedido,pedidos.id_producto,productos.nombres,pedidos.fecha,pedidos.cantidad_pedido,provedor.nombre FROM pedidos,productos,provedor WHERE pedidos.id_producto=productos.id_prod AND provedor.id_provedor=productos.id_provedor AND cantidad_pedido>$dato2 AND cantidad_pedido<$dato1 ORDER BY provedor.nombre";
    $resultado = mysqli_query($conexion, $usuarios);
    if (!$resultado){
        echo "no se muestrappp";
    }
    else{ {?>
        <div class="contenedo">
        <div class="titulo">Pedidos</div>
        <div class="cuerpo">Id Pedido</div>
        <div class="cuerpo">Id Producto</div>
        <div class="cuerpo">Nombre</div>
        <div class="cuerpo">Fecha</div>
        <div class="cuerpo">Cantidad</div>
        <div class="cuerpo">Nombre del provedor</div>

    <?php } while($row=mysqli_fetch_assoc($resultado)) { ?>
        <div class="item" ><?php echo $row["id_pedido"];?></div>
        <div class="item" ><?php echo $row["id_producto"];?></div>
        <div class="item" ><?php echo $row["nombres"];?></div>
        <div class="item" ><?php echo $row["fecha"];?></div>
        <div class="item" ><?php echo $row["cantidad_pedido"];?></div>
        <div class="item" ><?php echo $row["nombre"];?></div>
    <?php } mysqli_free_result($resultado);{?>
        </div>
    <?php }}}
function s2(){ {?>
    <div class="healer" >
        <center>
            <p id="linea"></p>
            <h5>la consulta es SELECT pedidos.id_pedido,pedidos.id_producto,productos.nombres,pedidos.fecha,pedidos.cantidad_pedido,provedor.nombre FROM pedidos,productos,provedor WHERE pedidos.id_producto=productos.id_prod AND provedor.id_provedor=productos.id_provedor AND cantidad_pedido>$dato2 AND cantidad_pedido<$dato1 ORDER BY provedor.nombre</h5>
        </center>
    </div>
<?php }}?>


<?php
function igual($dato1,$dato2){
    $conexion=con();
    mysqli_set_charset($conexion,"utf8");
    $usuarios = "SELECT pedidos.id_pedido,pedidos.id_producto,productos.nombres,pedidos.fecha,pedidos.cantidad_pedido,provedor.nombre FROM pedidos,productos,provedor WHERE pedidos.id_producto=productos.id_prod AND provedor.id_provedor=productos.id_provedor AND cantidad_pedido=$dato1 ORDER BY provedor.nombre";
    $resultado = mysqli_query($conexion, $usuarios);
    if (!$resultado){
        echo "no se muestrappp";
    }
    else{ {?>
        <div class="contenedo">
        <div class="titulo">Pedidos</div>
        <div class="cuerpo">Id Pedido</div>
        <div class="cuerpo">Id Producto</div>
        <div class="cuerpo">Nombre</div>
        <div class="cuerpo">Fecha</div>
        <div class="cuerpo">Cantidad</div>
        <div class="cuerpo">Nombre del provedor</div>

    <?php } while($row=mysqli_fetch_assoc($resultado)) { ?>
        <div class="item" ><?php echo $row["id_pedido"];?></div>
        <div class="item" ><?php echo $row["id_producto"];?></div>
        <div class="item" ><?php echo $row["nombres"];?></div>
        <div class="item" ><?php echo $row["fecha"];?></div>
        <div class="item" ><?php echo $row["cantidad_pedido"];?></div>
        <div class="item" ><?php echo $row["nombre"];?></div>
    <?php } mysqli_free_result($resultado);{?>
        </div>
    <?php }}}
function s3(){ {?>
    <div class="healer" >
        <center>
            <p id="linea"></p>
            <h5>SELECT pedidos.id_pedido,pedidos.id_producto,productos.nombres,pedidos.fecha,pedidos.cantidad_pedido,provedor.nombre FROM pedidos,productos,provedor WHERE pedidos.id_producto=productos.id_prod AND provedor.id_provedor=productos.id_provedor AND cantidad_pedido=$dato1 ORDER BY provedor.nombre</h5>
        </center>
    </div>
<?php }}?>
