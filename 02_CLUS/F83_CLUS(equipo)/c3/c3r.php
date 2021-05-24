<?php
include ("c3.php");
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
    $usuarios = "SELECT productos.id_prod,productos.nombres,productos.descripcion,Sum(pedidos.cantidad_pedido) AS'suma' FROM productos,pedidos Where id_prod=$dato AND productos.id_prod=pedidos.id_producto";
    $resultado = mysqli_query($conexion, $usuarios);
    if (!$resultado){
        echo "no se muestrappp";
    }
    else{ {?>
        <div class="contenedor">
        <div class="titulo">Suma del producto de los pedidos</div>
        <div class="cuerpo">Id Prodcucto</div>
        <div class="cuerpo">Nombre</div>
        <div class="cuerpo">Descripcion</div>
        <div class="cuerpo">Suma total de los pedidos</div>

    <?php }
        while($row=mysqli_fetch_assoc($resultado)){
    { ?>
        <div class="item" ><?php echo $row["id_prod"];?></div>
        <div class="item" ><?php echo $row["nombres"];?></div>
        <div class="item" ><?php echo $row["descripcion"];?></div>
        <div class="item" ><?php echo $row["suma"];?></div>
    <?php }} mysqli_free_result($resultado);{?>
        </div>
    <?php }}}
function s(){ {?>
    <div class="healer" >
        <center>
            <p id="linea"></p>
            <h5>la consulta es SELECT productos.id_prod,productos.nombres,productos.descripcion,Sum(pedidos.cantidad_pedido) AS'suma' FROM productos,pedidos Where id_prod=$dato AND productos.id_prod=pedidos.id_producto</h5>
        </center>
    </div>
<?php }}?>
