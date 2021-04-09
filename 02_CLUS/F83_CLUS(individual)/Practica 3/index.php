<?php

<<<<<<< HEAD
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
    echo ($hora);
    echo ($minutos);
    echo (":");
    echo ($segundos++);
    sleep(3);
    ncurses_clear ( );  
}
=======
>>>>>>> main
?>