<?php
include ("c5.php");
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
if (isset($_POST['r2'])){
    $dato = $_POST['r2'];
    sq($dato);
    s();
}
else{
    echo "no se mando nada";
}?>
</body>
</html>


<?php
function sq($dato){
    $conexion=con();
    mysqli_set_charset($conexion,"utf8");
    $usuarios = "SELECT productos.nombres, productos.stock,provedor.descripcion ,pedidos.cantidad_pedido FROM productos,pedidos,provedor WHERE pedidos.cantidad_pedido=(SELECT sum(cantidad_pedido) FROM pedidos WHERE pedidos.id_producto=$dato AND pedidos.id_producto=productos.id_prod AND provedor.id_provedor=productos.id_provedor)";
    $resultado = mysqli_query($conexion, $usuarios);
    if (!$resultado){
        echo "no se muestrappp";
    }
    else{ {?>
        <div class="contenedor">
        <div class="titulo">Calculo de pedidos del producto especifico</div>
        <div class="cuerpo">Nombre del producto</div>
        <div class="cuerpo">cantidad total</div>
        <div class="cuerpo">Que tipo de producto</div>
        <div class="cuerpo">Total de pedidos</div>

    <?php } while($row=mysqli_fetch_assoc($resultado)) { ?>
        <div class="item" ><?php echo $row["nombres"];?></div>
        <div class="item" ><?php echo $row["stock"];?></div>
        <div class="item" ><?php echo $row["descripcion"];?></div>
        <div class="item" ><?php echo $row["cantidad_pedido"];?></div>
    <?php } mysqli_free_result($resultado);{?>
        </div>
    <?php }}}
function s(){ {?>
    <div class="healer" >
        <center>
            <p id="linea"></p>
            <h5>la consulta es SELECT productos.nombres, productos.stock,provedor.descripcion ,pedidos.cantidad_pedido FROM productos,pedidos,provedor WHERE pedidos.cantidad_pedido=(SELECT sum(cantidad_pedido) FROM pedidos WHERE pedidos.id_producto=$dato AND pedidos.id_producto=productos.id_prod AND provedor.id_provedor=productos.id_provedor)</h5>
        </center>
    </div>
<?php }}?>