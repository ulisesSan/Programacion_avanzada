<?php
//conexion a la base de datos
function con(){
    $c=mysqli_connect("localhost","root",
        "1234","f83_15");
    mysqli_set_charset($c,"utf8");
    return $c;
}
