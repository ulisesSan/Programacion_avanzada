

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conexion exitosa</title>
</head>
<body>
<?php
$connector = mysqli_connect(
    'localhost',
    'root',
    '',
    'f83_15'
);
if(isset($connector)){
    echo '<h1>La base de datos a sido conectada</h2>';
}
?>
<button onclick="location.href='C:\xampp\htdocs\Programacion_avanzada\02_CLUS\F83_CLUS(individual)\Practica 4\index.html'">Probar Conexón</button>
</html>