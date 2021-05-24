<?php
include ("c1.php");
include ("../conex/conex.php");
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
    $usuarios = "SELECT * FROM provedor Where Nombre LIKE'%$dato%'  ORDER BY Nombre ";
    $resultado = mysqli_query($conexion, $usuarios);
    if (!$resultado){
        echo "no se muestrappp";
    }
    else{ {?>
        <div class="contenedor">
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
    <?php }}}
function s(){ {?>
    <div class="healer" >
        <center>
            <p id="linea"></p>
            <h5>la consulta es SELECT * FROM provedor Where Nombre LIKE '%$dato%'</h5>
        </center>
    </div>
<?php }}?>
