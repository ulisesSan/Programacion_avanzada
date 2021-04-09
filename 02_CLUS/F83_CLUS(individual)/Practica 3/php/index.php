<?php

$hora=idate("h");
$minutos = idate("i");
$segundos = idate("s");



for($i=0;$i<=60;$i++){
    if($minutos == 59){
        $hora++;
        $minutos==0;
    }
    if($segundos == 59){
        $minutos ++;
        $segundos==0;
    }

    $i++;
    $tiempo = $hora.":".$minutos.":".$segundos;
    echo($tiempo);
    usleep(13000);
    
}
?>