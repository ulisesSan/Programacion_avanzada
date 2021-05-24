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
    <link rel="stylesheet" href="../css/a4.css">
</head>
<body>
<div class="p1">
    <div class="healer" >
        <center>
        <h2>Consulta de resumen 02</h2>
        <p id="linea"></p>
        <h4>Deberá entregar valores de máximo o mínimo </h4>
        <h4>El resultado deberá estar dada por una condición de resumen </h4>
            <p id="linea"></p>
            <h5></h5>
        </center>
    </div>
</div>
<div>
    <form action="c4r.php" method="post">
        <input type="text" name="r2" required id="r2" placeholder="ingresa el id del provedor" class="q"/><br>
       <center>
           <input type="radio" name="r1" value="1" >Maximo
        <input type="radio" name="r1" value="2">Minimo
       </center>
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
    $usuarios = "SELECT * FROM provedor ORDER BY nombre ";
    $resultado = mysqli_query($conexion, $usuarios);
    if (!$resultado){
        echo "no se muestra";
    }
    else{ {?>
        <div class="contenedor" id="t1">
        <div class="titulo">Datos requeridos</div>
        <div class="cuerpo">id provedor</div>
        <div class="cuerpo">Nombre</div>
        <div class="cuerpo">Descripcion</div>
        <div class="cuerpo">rfc</div>

    <?php } while($row=mysqli_fetch_assoc($resultado)) { ?>
        <div class="item" ><?php echo $row["id_provedor"];?></div>
        <div class="item" ><?php echo $row["nombre"];?></div>
        <div class="item" ><?php echo $row["descripcion"];?></div>
        <div class="item" ><?php echo $row["rfc"];?></div>
    <?php } mysqli_free_result($resultado);{?>
        </div>
    <?php  }}} ?>