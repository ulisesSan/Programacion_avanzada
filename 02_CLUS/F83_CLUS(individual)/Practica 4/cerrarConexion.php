<?php
 include ("Source/PHP/conexion.php");

$desconexion = mysqli_close($connector);

if($desconexion == 1){
    echo("<h1>Se ha desconectado con exito la base de datos</h1>");
}
else{
    echo("<h1>Ha fallado la desconexion de la base de datos</h1>");
}
?>