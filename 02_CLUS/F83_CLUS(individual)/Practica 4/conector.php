<?php include("Source/PHP/conexion.php");?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conexion exitosa</title>
</head>
<body>
    <?php
    if(isset($connector)){
        echo '<h1>La base de datos a sido conectada</h2>';
    }
    ?>
<button onclick="location.href='index.php'">Regresar</button>
</body>
</html>
