<?php
include ("c4.php");
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
if (isset($_POST['r2'], $_POST['r1'])){
    $dato = $_POST['r2'];
    $dato1 = $_POST['r1'];
    if($dato1==1){
        sq($dato);
        s();
    }elseif ($dato1==2){
        sqll($dato);
        s1();
    }else{
        echo "esta mal";
    }
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
    $usuarios = "SELECT provedor.nombre,provedor.descripcion,productos.nombres,Max(productos.Stock) AS 'maximo' FROM provedor,productos Where provedor.id_provedor=productos.id_provedor and provedor.id_provedor=$dato";
    $resultado = mysqli_query($conexion, $usuarios);
    if (!$resultado){
        echo "no se muestrappp";
    }
    else{ {?>
        <div class="contenedor">
        <div class="titulo">Maximo de productos del provedor</div>
        <div class="cuerpo">Nombre del provedor</div>
        <div class="cuerpo">Tipo de mercancia</div>
        <div class="cuerpo">Nombre del producto</div>
        <div class="cuerpo">Cantidad</div>

    <?php } while($row=mysqli_fetch_assoc($resultado)) { ?>
        <div class="item" ><?php echo $row["nombre"];?></div>
        <div class="item" ><?php echo $row["descripcion"];?></div>
        <div class="item" ><?php echo $row["nombres"];?></div>
        <div class="item" ><?php echo $row["maximo"];?></div>
    <?php } mysqli_free_result($resultado);{?>
        </div>
    <?php }}}
function s(){ {?>
    <div class="healer" >
        <center>
            <p id="linea"></p>
            <h5>la consulta es SELECT provedor.nombre,provedor.descripcion,productos.nombres,Max(productos.Stock) AS 'maximo' FROM provedor,productos Where provedor.id_provedor=productos.id_provedor and provedor.id_provedor=$dato</h5>
        </center>
    </div>
<?php }}
function sqll($dato){
    $conexion=con();
    mysqli_set_charset($conexion,"utf8");
    $usuarios = "SELECT provedor.nombre,provedor.descripcion,productos.nombres,MIN(productos.Stock) AS 'minimo' FROM provedor,productos Where provedor.id_provedor=productos.id_provedor and provedor.id_provedor=$dato";
    $resultado = mysqli_query($conexion, $usuarios);
    if (!$resultado){
        echo "no se muestrappp";
    }
    else{ {?>
        <div class="contenedor">
        <div class="titulo">Maximo de productos del provedor</div>
        <div class="cuerpo">Nombre del provedor</div>
        <div class="cuerpo">Tipo de mercancia</div>
        <div class="cuerpo">Nombre del producto</div>
        <div class="cuerpo">Cantidad</div>

    <?php } while($row=mysqli_fetch_assoc($resultado)) { ?>
        <div class="item" ><?php echo $row["nombre"];?></div>
        <div class="item" ><?php echo $row["descripcion"];?></div>
        <div class="item" ><?php echo $row["nombres"];?></div>
        <div class="item" ><?php echo $row["minimo"];?></div>
    <?php } mysqli_free_result($resultado);{?>
        </div>
    <?php }}}
function s1(){ {?>
    <div class="healer" >
        <center>
            <p id="linea"></p>
            <h5>la consulta es SELECT provedor.nombre,provedor.descripcion,productos.nombres,Min(productos.Stock) AS 'minimo' FROM provedor,productos Where provedor.id_provedor=productos.id_provedor and provedor.id_provedor=$dato</h5>
        </center>
    </div>
<?php }}?>
