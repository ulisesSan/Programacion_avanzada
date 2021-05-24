<button onclick="location.href='index.html'">Regresar</button>
<?php 
//formato a todo el texto
echo "<h1 >";
//iniciar reloj en 0
$Horas=0;
$Minutos=0;
$Segundos=0;
//bucle infinito para salir en caso de error

for ($Horas=0; $Horas < 24; $Horas++) { 


for ($Minutos=0; $Minutos < 60; $Minutos++) { 

    for ($Segundos=0; $Segundos < 60 ; $Segundos++) { 
        echo $Horas. ":" .$Minutos. ":" .$Segundos. "" ;
    echo "<br></br>";
    }
}
}

echo "</h1>";

?>