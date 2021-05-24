<?php
include ("c8.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport", content="width-device-width, user-scalable-no, inicial-scale=1.0,
maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/a82.css">
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
    $usuarios = "SELECT year(fecha)as anio,nombres,
sum(case MONTH(fecha) WHEN 1 then cantidad_pedido else ''end)as ENE,
sum(case MONTH(fecha) WHEN 2 then cantidad_pedido else ''end)as FEB,
sum(case MONTH(fecha) WHEN 3 then cantidad_pedido else ''end)as MAR,
sum(case MONTH(fecha) WHEN 4 then cantidad_pedido else ''end)as ABR,
sum(case MONTH(fecha) WHEN 5 then cantidad_pedido else ''end)as MAY,
sum(case MONTH(fecha) WHEN 6 then cantidad_pedido else ''end)as JUN,
sum(case MONTH(fecha) WHEN 7 then cantidad_pedido else ''end)as JUL,
sum(case MONTH(fecha) WHEN 8 then cantidad_pedido else ''end)as AGO,
sum(case MONTH(fecha) WHEN 9 then cantidad_pedido else ''end)as SEP,
sum(case MONTH(fecha) WHEN 10 then cantidad_pedido else ''end)as OCT,
sum(case MONTH(fecha) WHEN 11 then cantidad_pedido else ''end)as NOV,
sum(case MONTH(fecha) WHEN 12 then cantidad_pedido else ''end)as DIC
FROM productos,pedidos Where id_prod=id_producto AND id_producto=$dato group by year(fecha),nombres order by anio";
    $resultado = mysqli_query($conexion, $usuarios);
    if (!$resultado){
        echo "no se muestrappp";
    }
    else{ {?>
        <div class="contenedor">
        <div class="titulo">VENTA DE PRODUCTOS VENDIDOS POR MES Y AÑO</div>
        <div class="cuerpo">Año</div>
        <div class="cuerpo">Producto</div>
        <div class="cuerpo">ENE</div>
        <div class="cuerpo">FEB</div>
        <div class="cuerpo">MAR</div>
        <div class="cuerpo">ABR</div>
        <div class="cuerpo">MAY</div>
        <div class="cuerpo">JUN</div>
        <div class="cuerpo">JUL</div>
        <div class="cuerpo">AGO</div>
        <div class="cuerpo">SEP</div>
        <div class="cuerpo">OCT</div>
        <div class="cuerpo">NOV</div>
        <div class="cuerpo">DIC</div>
    <?php } while($row=mysqli_fetch_assoc($resultado)) { ?>
        <div class="item" ><?php echo $row["anio"];?></div>
        <div class="item" ><?php echo $row["nombres"];?></div>
        <div class="item" ><?php echo $row["ENE"];?></div>
        <div class="item" ><?php echo $row["FEB"];?></div>
        <div class="item" ><?php echo $row["MAR"];?></div>
        <div class="item" ><?php echo $row["ABR"];?></div>
        <div class="item" ><?php echo $row["MAY"];?></div>
        <div class="item" ><?php echo $row["JUN"];?></div>
        <div class="item" ><?php echo $row["JUL"];?></div>
        <div class="item" ><?php echo $row["AGO"];?></div>
        <div class="item" ><?php echo $row["SEP"];?></div>
        <div class="item" ><?php echo $row["OCT"];?></div>
        <div class="item" ><?php echo $row["NOV"];?></div>
        <div class="item" ><?php echo $row["DIC"];?></div>
    <?php } mysqli_free_result($resultado);{?>
        </div>
    <?php }}}
function s(){ {?>
    <div class="healer" >
        <center>
            <p id="linea"></p>
            <h5>la consulta es SELECT year(fecha)as anio,nombres,
                sum(case MONTH(fecha) WHEN 1 then cantidad_pedido else ''end)as ENE,
                sum(case MONTH(fecha) WHEN 2 then cantidad_pedido else ''end)as FEB,
                sum(case MONTH(fecha) WHEN 3 then cantidad_pedido else ''end)as MAR,
                sum(case MONTH(fecha) WHEN 4 then cantidad_pedido else ''end)as ABR,
                sum(case MONTH(fecha) WHEN 5 then cantidad_pedido else ''end)as MAY,
                sum(case MONTH(fecha) WHEN 6 then cantidad_pedido else ''end)as JUN,
                sum(case MONTH(fecha) WHEN 7 then cantidad_pedido else ''end)as JUL,
                sum(case MONTH(fecha) WHEN 8 then cantidad_pedido else ''end)as AGO,
                sum(case MONTH(fecha) WHEN 9 then cantidad_pedido else ''end)as SEP,
                sum(case MONTH(fecha) WHEN 10 then cantidad_pedido else ''end)as OCT,
                sum(case MONTH(fecha) WHEN 11 then cantidad_pedido else ''end)as NOV,
                sum(case MONTH(fecha) WHEN 12 then cantidad_pedido else ''end)as DIC
                FROM productos,pedidos Where id_prod=id_producto AND id_producto=$dato
                group by year(fecha),nombres
                order by anio</h5>
        </center>
    </div>
<?php }}?>
