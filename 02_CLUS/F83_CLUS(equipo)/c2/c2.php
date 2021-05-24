<?php
include ("../conex/conex.php");
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport", content="width-device-width, user-scalable-no, inicial-scale=1.0,
maximum-scale=1.0, minimum-scale=1.0">
    <title>c2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/a2.css">
</head>
<body>
<div class="p1">
    <div class="healer" >
        <center>
        <h2>Consulta multitabla  </h2>
        <p id="linea"></p>
        <h4>Deberá contener por lo menos tres tablas de la base de datos </h4>
        <h4>Realizará una búsqueda dada una condición</h4>
            <h4>El resultado deberá de estar ordenado por uno o varios campos. </h4>
            <p id="linea"></p>
            <h5></h5>
        </center>
    </div>
</div>
<div>
    <form action="c2r.php" method="post">
        <input type="text" name="r1" required id="r1" placeholder="ingresa un rango" class="q"/><br>
        <input type="text" name="r2" required id="r2" placeholder="ingresa un rango" class="q"/><br>
        <center><h6>Dar Doble click</h6>
            <input onclick="mos1()" type="submit" value="buscar" ></center>
    </form>
</div>
<script type="text/javascript" src="../js/mostrar.js"></script>
<?php
sql();
?>
</body>
</html>
<?php
function sql(){
    $conexion=con();
    mysqli_set_charset($conexion,"utf8");
    $usuarios = "SELECT pedidos.id_pedido,pedidos.id_producto,productos.nombres,pedidos.fecha,pedidos.cantidad_pedido FROM pedidos,productos WHERE pedidos.id_producto=productos.id_prod ORDER BY productos.nombres";
    $resultado = mysqli_query($conexion, $usuarios);
    if (!$resultado){
        echo "no se muestra";
    }
    else{ {?>
        <div class="contenedor" id="t1">
        <div class="titul">Pedidos</div>
        <div class="cuerpo">Id Pedido</div>
        <div class="cuerpo">Id Producto</div>
        <div class="cuerpo">Nombre</div>
        <div class="cuerpo">Fecha</div>
        <div class="cuerpo">Cantidad</div>

    <?php } while($row=mysqli_fetch_assoc($resultado)) { ?>
        <div class="item" ><?php echo $row["id_pedido"];?></div>
        <div class="item" ><?php echo $row["id_producto"];?></div>
        <div class="item" ><?php echo $row["nombres"];?></div>
        <div class="item" ><?php echo $row["fecha"];?></div>
        <div class="item" ><?php echo $row["cantidad_pedido"];?></div>
    <?php } mysqli_free_result($resultado);{?>
        </div>
    <?php  }}} ?>