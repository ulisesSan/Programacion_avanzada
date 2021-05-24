<?php
include ("../conex/conex.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport", content="width-device-width, user-scalable-no, inicial-scale=1.0,
maximum-scale=1.0, minimum-scale=1.0">
    <title>c1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/a5.css">
</head>
<body>
<div class="p1">
    <div class="healer" >
        <center>
        <h2>Subconsultas  </h2>
        <p id="linea"></p>
        <h4>Deberá de tener por lo menos dos tablas en la consulta </h4>
        <h4>El resultado deberá ser dada por un dato de búsqueda </h4>
            <p id="linea"></p>
            <h5></h5>
        </center>
    </div>
</div>
<div>
    <form action="c5r.php" method="post">
        <input type="text" name="r2" required id="r1" placeholder="ingresa el id del producto" class="q"/><br>
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
    $usuarios = "SELECT * FROM productos ";
    $resultado = mysqli_query($conexion, $usuarios);
    if (!$resultado){
        echo "no se muestrappp";
    }
    else{ {?>
        <div class="contenedor" id="t1">
        <div class="titulo">productos</div>
        <div class="cuerpo">Id Productos</div>
        <div class="cuerpo">Nombre</div>
        <div class="cuerpo">Descripcion</div>
        <div class="cuerpo">stock</div>

    <?php } while($row=mysqli_fetch_assoc($resultado)) { ?>
        <div class="item" ><?php echo $row["id_prod"];?></div>
        <div class="item" ><?php echo $row["nombres"];?></div>
        <div class="item" ><?php echo $row["descripcion"];?></div>
        <div class="item" ><?php echo $row["stock"];?></div>
    <?php } mysqli_free_result($resultado);{?>
        </div>
    <?php  }}} ?>


